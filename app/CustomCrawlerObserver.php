<?php

namespace App;

use App\Models\Link;
use LanguageDetection\Language;
use Spatie\Crawler\CrawlObservers\CrawlObserver;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class CustomCrawlerObserver extends CrawlObserver
{
    public function willCrawl(UriInterface $url, ?string $linkText): void
    {
        Link::updateOrCreate(
            ['url' => (string) $url],
            ['status' => Link::STATUS_PROCESSING]
        );
    }

    public function crawled(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null,
        ?string $linkText = null,
    ): void {

        $html = $response->getBody()->getContents();
        $language = array_key_first(app(Language::class)->detect($html)->close()) ?? 'en'; // default to 'en'
        $domain = $url->getHost();

        Link::firstOrCreate([
            'url' => (string) $url,
            'domain' => $domain,
            'publication_time' => now(), // TODO: extract publication time from the page
            'language' => $language,
            'status' => Link::STATUS_CRAWLED,
        ]);
    }

    public function crawlFailed(
        UriInterface $url,
        RequestException $requestException,
        ?UriInterface $foundOnUrl = null,
        ?string $linkText = null,
    ): void {
        Link::updateOrCreate(
            ['url' => (string) $url],
            ['status' => Link::STATUS_FAILED]
        );

        Log::error("Crawl failed for URL: {$url}, Error: {$requestException->getMessage()}");
    }
}
