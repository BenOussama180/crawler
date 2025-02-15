<?php

use App\Console\Commands\CrawlSources;
use App\Models\CrawlerConfig;
use Illuminate\Support\Facades\Schedule;

Schedule::command(CrawlSources::class)
    ->daily()
    ->when(fn() => CrawlerConfig::whereSchedule('daily')->exists());

Schedule::command(CrawlSources::class)
    ->weekly()
    ->when(fn() => CrawlerConfig::whereSchedule('weekly')->exists());

Schedule::command(CrawlSources::class)
    ->monthly()
    ->when(fn() => CrawlerConfig::whereSchedule('monthly')->exists());
