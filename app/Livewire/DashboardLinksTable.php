<?php

namespace App\Livewire;

use App\Models\CrawlerConfig;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Link;
use Rappasoft\LaravelLivewireTables\Views\Actions\Action;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\CountColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;


class DashboardLinksTable extends DataTableComponent
{
    protected $model = CrawlerConfig::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setActionsInToolbarEnabled();
        $this->setActionWrapperAttributes([
            'class' => 'space-x-4'
        ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("name", "name")
                ->sortable(),
            Column::make("keywords", "keywords")
                ->format(function ($value) {
                    return implode(", ", $value);
                })
                ->sortable(),
            Column::make("schedule", "schedule")
                ->sortable(),

            CountColumn::make('Related Sources')
                ->setDataSource('sources')
                ->sortable(),

            Column::make('Sources Information')
                ->label(
                    function ($row) {
                        $sources = htmlspecialchars(json_encode($row->sources), ENT_QUOTES, 'UTF-8');
                        return '<button class="px-1.5 py-2 bg-black text-white rounded-md" wire:click="$dispatch(\'openModal\', { component: \'show-sources-modal\', arguments: { sources: ' . $sources . ' } })">Show Sources</button>';
                    }
                )
                ->html(),



            Column::make("Status", "status")
                ->format(function ($value) {
                    return match ($value) {
                        Link::STATUS_PENDING => '<span class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">Pending</span>',
                        Link::STATUS_CRAWLED => '<span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Approved</span>',
                        Link::STATUS_PROCESSING => '<span class="inline-flex px-2 text-xs font-semibold leading-5 text-blue-800 bg-blue-100 rounded-full">Processing</span>',
                        default => '<span class="inline-flex px-2 text-xs font-semibold leading-5 text-gray-800 bg-gray-100 rounded-full">Unknown</span>',
                    };
                })
                ->sortable()
                ->searchable()
                ->html(),
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Status')
                ->options([
                    '' => 'All',
                    Link::STATUS_PENDING => 'Pending',
                    Link::STATUS_CRAWLED => 'Crawled',
                    Link::STATUS_PROCESSING => 'Processing',
                ])
                ->filter(function ($builder, $value) {
                    return $builder->where('status', $value);
                }),
        ];
    }
}
