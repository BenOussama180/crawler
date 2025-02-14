<?php

use App\Models\CrawlerConfig;
use function Laravel\Folio\middleware;
use function Laravel\Folio\name;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

name('parametre');
middleware(['auth', 'verified']);
new class extends Component
{

    public Collection|array $configs;
    public string $keywords;
    public string $name;
    public string $schedule;

    public function mount()
    {
        $this->configs = Auth::user()->crawlerConfigs ?? null;
    }

    public function handleConfigEdit(CrawlerConfig $config)
    {
        $this->name     = $config->name;
        $this->keywords = implode(',', $config->keywords);
        $this->schedule = $config->schedule;
    }

    public function create($id = null)
    {
        $this->validate([
            'name'     => 'required|string',
            'keywords' => 'required|string',
            'schedule' => 'required|string|in:daily,weekly,monthly',
        ]);

        // format keywords to array
        $keywords = explode(',', $this->keywords);
        $keywords = array_filter($keywords, fn($keyword) => filled(trim($keyword)));

        // update settings
        Auth::user()->crawlerConfigs()->updateOrCreate(
            ['id' => $id],
            ['keywords' => $keywords, 'schedule' => $this->schedule, 'name' => $this->name]
        );
        $this->dispatch('toast', message: 'Saved Successfully', data: ['position' => 'top-right', 'type' => 'info']);
        if (!$id)
            $this->reset(['name', 'keywords', 'schedule']);
        $this->configs = Auth::user()->crawlerConfigs->fresh();
    }

    public function delete($id)
    {
        Auth::user()->crawlerConfigs()->where('id', $id)->delete();
        $this->configs = Auth::user()->crawlerConfigs->fresh();
        $this->dispatch('toast', message: 'Deleted Successfully', data: ['position' => 'top-right', 'type' => 'info']);
        $this->reset(['name', 'keywords', 'schedule']);
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

        <x-ui.slide-over title="Add New Setting" name="power-up-details" focusable>
            <x-slot:trigger>
                <x-button rounded primary label="Add New Config" icon="plus" />
            </x-slot:trigger>
            <div class="relative space-y-4">
                <div class="relative flex-1 w-full p-4 md:p-0 h-100">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
                        <div class="col-span-1">
                            <div
                                class="bg-white border rounded-lg shadow-sm dark:bg-gray-900/50 border-gray-200/80 dark:border-gray-200/10">
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                        Subject
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                        Add a subject to categorize your crawling.
                                    </p>
                                    <div class="mt-4">
                                        <x-input wire:model="name" type="text" placeholder="Add a name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div
                                class="bg-white border rounded-lg shadow-sm dark:bg-gray-900/50 border-gray-200/80 dark:border-gray-200/10">
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                        Keywords
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                        Keywords are used to categorize your crawling.
                                    </p>
                                    <div class="mt-4">
                                        <x-input wire:model="keywords" type="text" placeholder="Add keywords"
                                            description="keywords should be separated by a coma." />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div
                                class="bg-white border rounded-lg shadow-sm dark:bg-gray-900/50 border-gray-200/80 dark:border-gray-200/10">
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                        Schedule
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                        Schedule your posts to be published at a later date.
                                    </p>
                                    <div class="mt-4">
                                        <x-select class="capitalize" wire:model="schedule" label="Select schedule"
                                            placeholder="Select one schedule" :options="[
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
                        <x-button wire:click="create" wire:loading.attr="disabled" spinner
                            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700"
                            right-icon="check" label="Save" />
                    </div>
                </div>
            </div>

        </x-ui.slide-over>
        <div class="flex flex-col items-stretch flex-1 pb-5 mx-auto h-100 min-h-[500px] w-full">
            <div class="grid w-full grid-cols-3 gap-8 mt-8">
                @forelse ($configs as $index => $config)
                <x-ui.slide-over title="{{ $config->name }}" name="power-up-details" focusable>
                    <x-slot:trigger>
                        <div wire:click="handleConfigEdit({{ $config->id }})"
                            class="p-3 transition-transform duration-300 bg-white border shadow-sm cursor-pointer group dark:bg-gray-900 rounded-xl hover:-translate-y-1 hover:shadow-xl border-slate-100 dark:border-white/10">
                            <span class="flex flex-col justify-start px-1 py-2">
                                <span
                                    class="line-clamp-1 pt-2.5 text-lg font-semibold flex items-center dark:text-white space-x-1.5">
                                    <span class="flex items-center justify-center text-lg">⚙️</span>
                                    <span>{{ $config->name }}</span>
                                </span>
                                <p
                                    class="block pt-1.5 pb-3 text-md text-left line-clamp-2 text-slate-800/70 dark:text-white/50">
                                    @foreach ( $config->keywords as $kw)
                                    <x-badge secondary :label="$kw" />
                                    @endforeach
                                </p>
                                <x-ui.button type="secondary" rounded="md">Edit</x-ui.button>
                            </span>
                        </div>
                    </x-slot:trigger>
                    <div class="relative space-y-4">
                        <div class="relative flex-1 w-full p-4 md:p-0 h-100">
                            <x-button spinner flat />
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-1" wire:loading.class="opacity-25">
                                <div class="col-span-1">
                                    <div
                                        class="bg-white border rounded-lg shadow-sm dark:bg-gray-900/50 border-gray-200/80 dark:border-gray-200/10">
                                        <div class="p-6">
                                            <h3 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                                Subject
                                            </h3>
                                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                                Add a subject to categorize your crawling.
                                            </p>
                                            <div class="mt-4">
                                                <x-input wire:model="name" type="text" placeholder="Add a name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-1">
                                    <div
                                        class="bg-white border rounded-lg shadow-sm dark:bg-gray-900/50 border-gray-200/80 dark:border-gray-200/10">
                                        <div class="p-6">
                                            <h3 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                                Keywords
                                            </h3>
                                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                                Keywords are used to categorize your crawling.
                                            </p>
                                            <div class="mt-4">
                                                <x-input wire:model="keywords" type="text" placeholder="Add keywords"
                                                    description="keywords should be separated by a coma." />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-1">
                                    <div
                                        class="bg-white border rounded-lg shadow-sm dark:bg-gray-900/50 border-gray-200/80 dark:border-gray-200/10">
                                        <div class="p-6">
                                            <h3 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
                                                Schedule
                                            </h3>
                                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                                Schedule your posts to be published at a later date.
                                            </p>
                                            <div class="mt-4">
                                                <x-select class="capitalize" wire:model="schedule" label="Select schedule"
                                                    placeholder="Select one schedule" :options="[
                                            'daily',
                                            'weekly',
                                            'monthly'
                                        ]" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between mt-6">
                                <x-button wire:click="create({{$config->id}})" wire:loading.attr="disabled" spinner
                                    primary
                                    right-icon="check" label="Save" />
                                <x-button wire:click="delete({{$config->id}})" wire:loading.attr="disabled" spinner
                                    negative
                                    right-icon="trash" label="DELETE" />
                            </div>
                        </div>
                    </div>
                </x-ui.slide-over>
                @empty
                <div class="flex items-center justify-center w-full h-100">
                    <div class="flex flex-col items-center justify-center space-y-2">

                        <p class="text-gray-500 dark:text-gray-400">No configurations found. Please add a new setting.
                        </p>
                    </div>
                </div>

                @endforelse
            </div>
        </div>
    </div>
    @endvolt
</x-layouts.app>