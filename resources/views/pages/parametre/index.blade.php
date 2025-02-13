<?php

use function Laravel\Folio\{middleware, name};

use App\Models\CrawlerConfig;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

name('parametre');
middleware(['auth', 'verified']);

new class extends Component {
    public string $keywords;
    public string $schedule;

    public function mount()
    {
        $config = Auth::user()->crawlerConfig;
        $this->keywords = implode(', ', $config->keywords);
        $this->schedule = $config->schedule;
    }

    public function save()
    {
        $this->validate([
            'keywords' => 'required|string',
            'schedule' => 'required|string|in:daily,weekly,monthly',
        ]);

        // format keywords to array
        $keywords = explode(',', $this->keywords);
        $keywords = array_filter($keywords, fn($keyword) => filled(trim($keyword)));

        // update settings
        Auth::user()->crawlerConfig()->updateOrCreate(
            ['user_id' => Auth::id()],
            ['keywords' => $keywords, 'schedule' => $this->schedule]
        );
        $this->dispatch('toast', message: 'Nothing to update.', data: ['position' => 'top-right', 'type' => 'info']);
    }
};
?>

<x-layouts.app>
    <x-slot name="header">
        <h2 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Settings
        </h2>
    </x-slot>

    @volt('parametre')
    <div class="flex flex-col items-stretch flex-1 h-100">
        <div class="flex flex-col items-stretch flex-1 pb-5 mx-auto h-100 min-h-[500px] w-full">
            <div class="relative flex-1 w-full h-100">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div class="col-span-1">
                        <div class="bg-white border rounded-lg shadow-sm dark:bg-gray-900/50 border-gray-200/80 dark:border-gray-200/10">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                    Keywords
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Keywords are used to categorize your crawling.
                                </p>
                                <div class="mt-4">
                                    <x-input wire:model="keywords" type="text" placeholder="Add keywords" description="keywords should be separated by a coma." />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-white border rounded-lg shadow-sm dark:bg-gray-900/50 border-gray-200/80 dark:border-gray-200/10">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                    Schedule
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Schedule your posts to be published at a later date.
                                </p>
                                <div class="mt-4">
                                    <x-select
                                        class="capitalize"
                                        wire:model="schedule"
                                        label="Select schedule"
                                        placeholder="Select one schedule"
                                        :options="[
                                            'daily',
                                            'weekly',
                                            'monthly'
                                        ]" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-6">
                    <x-button wire:click="save" wire:loading.attr="disabled" spinner class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700" right-icon="check" label="Save" />
                </div>
            </div>
        </div>
    </div>
    @endvolt
</x-layouts.app>