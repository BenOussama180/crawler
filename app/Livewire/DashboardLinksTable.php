<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Link;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;


class DashboardLinksTable extends DataTableComponent
{
    protected $model = Link::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Url", "url")
                ->sortable(),
            Column::make("Domain", "domain")
                ->sortable(),
            Column::make("Publication time", "publication_time")
                ->sortable(),
            Column::make("Language", "language")
                ->sortable(),
            Column::make("Status", "status")
                ->format(function ($value) {
                    return match ($value) {
                        Link::STATUS_PENDING => '<span class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">Pending</span>',
                        Link::STATUS_CRAWLED => '<span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Approved</span>',
                        Link::STATUS_FAILED => '<span class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">Rejected</span>',
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
                    Link::STATUS_FAILED => 'Failed',
                    Link::STATUS_PROCESSING => 'Processing',
                ])
                ->filter(function ($builder, $value) {
                    return $builder->where('status', $value);
                }),
        ];
    }
}
