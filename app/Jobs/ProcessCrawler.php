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
        $sources = $crawlerService->findSourcesWithGoogle($this->crawlerConfig->keywords);

        $crawlerService->crawlForKeywords(
            $this->crawlerConfig->keywords,
            $sources
        );
    }
}
