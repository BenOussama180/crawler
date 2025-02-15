<?php

namespace App\Jobs;

use App\Models\CrawlerConfig;
use App\Services\CrawlerService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessCrawler implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(protected CrawlerConfig $crawlerConfig)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(CrawlerService $crawlerService): void
    {
        info('Crawling sources for config: ' . $this->crawlerConfig->id);

        $sources = $crawlerService->findSourcesWithGoogle($this->crawlerConfig->keywords);

        info('Found ' . count($sources) . ' sources for config: ' . $this->crawlerConfig->id);

        return;
        $crawlerService->crawlForKeywords(
            $this->crawlerConfig->keywords,
            $sources
        );
    }
}
