<?php

namespace App\Services;

use App\CustomCrawlerObserver;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Spatie\Crawler\Crawler;

class CrawlerService
{

    public function findSourcesWithGoogle($keywords)
    {
        return Cache::remember('google_search_' . md5(implode(',', $keywords)), 3600, function () use ($keywords) {
            try {
                // URL de l'API Google Custom Search
                $url = "https://www.googleapis.com/customsearch/v1";

                // Faire la requête HTTP avec Laravel HTTP Facade
                $response = Http::get($url, [
                    'q' => urlencode(implode(' OR ', $keywords)),
                    'key' => env('GOOGLE_API_KEY'),
                    'cx' => env('GOOGLE_SEARCH_ENGINE_ID')
                ]);

                // Vérifier si la requête a réussi
                if ($response->successful()) {
                    $data = $response->json(); // Convertir la réponse en tableau associatif

                    $sources = collect($data['items'])->map(function ($item) {
                        return [
                            'url' => $item['link'],
                            'title' => $item['title'],
                            'description' => $item['snippet'],
                            'type' => 'website',
                        ];
                    })->toArray();

                    return $sources;
                } else {
                    // Gérer les erreurs de requête
                    Log::error("Google API request failed: " . $response->status());
                    return [];
                }
            } catch (\Exception $e) {
                Log::error("An error occurred: " . $e->getMessage());
                return [];
            }
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
                    ->setCrawlObserver(new CustomCrawlerObserver())
                    ->startCrawling($source['url']);
            } elseif ($source['type'] === 'rss') {
                // TODO: Implement RSS scraping
                // $this->scrapeRSS($source['url'], $keywords);
            }
            // TODO implement other types of sources
        }
    }
}
