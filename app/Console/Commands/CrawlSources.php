<?php

namespace App\Console\Commands;

use App\Jobs\ProcessCrawler;
use App\Models\CrawlerConfig;
use Illuminate\Console\Command;

class CrawlSources extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:sources';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run crawlers based on their schedule';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $crawlerConfigs = CrawlerConfig::all();

        if ($crawlerConfigs->isEmpty()) {
            $this->info('No crawler configurations found.');
            return;
        }

        foreach ($crawlerConfigs as $config) {
            ProcessCrawler::dispatch($config);
        }

        $this->info('Crawler jobs dispatched successfully.');
    }
}
