<?php

namespace App\Services;

use App\CustomCrawlerObserver;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Spatie\Crawler\Crawler;

class CrawlerService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function findSourcesWithGoogle($keywords)
    {
        Cache::remember('google_search_' . md5(implode(',', $keywords)), 3600, function () use ($keywords) {
            // Récupérer les clés depuis .env
            $apiKey = env('GOOGLE_API_KEY');
            $searchEngineId = env('GOOGLE_SEARCH_ENGINE_ID');

            // Encoder les mots-clés pour la requête
            $query = urlencode(implode(' OR ', $keywords));

            // URL de l'API Google Custom Search
            $url = "https://www.googleapis.com/customsearch/v1?q={$query}&key={$apiKey}&cx={$searchEngineId}";

            // Faire la requête HTTP avec Laravel HTTP Facade
            $response = Http::get($url);

            // Vérifier si la requête a réussi
            if ($response->successful()) {
                $data = $response->json(); // Convertir la réponse en tableau associatif

                $sources = [];
                foreach ($data['items'] as $item) {
                    $sources[] = [
                        'url' => $item['link'],
                        'title' => $item['title'],
                        'description' => $item['snippet'],
                        'type' => 'website',
                    ];
                }

                return $sources;
            } else {
                // Gérer les erreurs de requête
                Log::error("Google API request failed: " . $response->status());
                return [];
            }
            // Logique de recherche ici
        });
    }

    public function crawlForKeywords($keywords, $sources)
    {
        foreach ($sources as $source) {
            if ($source['type'] === 'website') {
                Crawler::create()
                    ->acceptNofollowLinks()
                    ->ignoreRobots()
                    ->setTotalCrawlLimit(50)
                    ->setCrawlObserver(new CustomCrawlerObserver($keywords))
                    ->startCrawling($source['url']);
            } elseif ($source['type'] === 'rss') {
                // TODO: Implement RSS scraping
                // $this->scrapeRSS($source['url'], $keywords);
            }
            // TODO implement other types of sources
        }
    }
}
