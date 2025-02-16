<?php

namespace App;

use App\Models\Link;
use App\Models\Source;
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
        Source::whereUrl($url)->update(['status' => Link::STATUS_PROCESSING]);
    }

    public function crawled(
        UriInterface $url,
        ResponseInterface $response,
        ?UriInterface $foundOnUrl = null,
        ?string $linkText = null,
    ): void {

        $html = $response->getBody();

        if (empty($html)) {
            Source::whereUrl($url)->update(['status' => Link::STATUS_FAILED]);
        }

        $language = array_key_first(app(Language::class)->detect($html)->close()) ?? 'en'; // default to 'en'

        Source::whereUrl($url)->update([
            'status' => Link::STATUS_CRAWLED,
            'publication_time' => now(), // TODO: extract publication time from the page
            'language' => $language,
        ]);

        // generate a file that would contain text articles from the page that contains the keywords
        $file = fopen("storage/app/public/articles/{$url->getHost()}.txt", "w");
        $dom = new \DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new \DOMXPath($dom);
        $nodes = $xpath->query('//body//text()');

        $content = '';
        foreach ($nodes as $node) {
            $content .= $node->nodeValue . " ";
        }

        fwrite($file, trim($content));
        fclose($file);
    }

    public function crawlFailed(
        UriInterface $url,
        RequestException $requestException,
        ?UriInterface $foundOnUrl = null,
        ?string $linkText = null,
    ): void {
        Source::whereUrl($url)->update(['status' => Link::STATUS_FAILED]);

        Log::error("Crawl failed for URL: {$url}, Error: {$requestException->getMessage()}");
    }
}
