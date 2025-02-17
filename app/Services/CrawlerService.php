<?php

namespace App\Services;

use App\CustomCrawlerObserver;
use App\Models\Source;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Spatie\Crawler\Crawler;

class CrawlerService
{

    public function findSourcesWithGoogle($keywords, $id)
    {
        return Cache::remember('google_search_' . md5(implode(',', $keywords)), 3600, function () use ($keywords, $id) {
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

                    $sources = collect($data['items'])->map(function ($item) use ($id) {
                        return [
                            'url' => $item['link'],
                            'title' => $item['title'],
                            'description' => $item['snippet'],
                            'type' => 'website',
                            'crawler_config_id' => $id
                        ];
                    })->toArray();

                    // Delete old sources for the given crawler_config_id
                    if (!Cache::has('google_search_' . md5(implode(',', $keywords)))) {
                        Source::where('crawler_config_id', $id)->delete();
                        // Insert new sources
                        Source::insert($sources);
                    }


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
                    ->setTotalCrawlLimit(1)
                    ->setCrawlObserver(new CustomCrawlerObserver())
                    ->startCrawling($source['url']);
            }
            // TODO implement other types of sources eg: social media, news, etc.
        }

        // when all sources are crawled, update the status of the crawler config
        // CrawlerConfig::find($id)->update(['status' => CrawlerConfig::STATUS_CRAWLED]);
    }
}
