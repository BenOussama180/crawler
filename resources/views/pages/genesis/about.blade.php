<?php

use function Laravel\Folio\{name};
use Livewire\Volt\Component;

name('genesis.about');

new class extends Component {};
?>

<x-layouts.marketing>

    <div class="w-full">

        <x-ui.marketing.breadcrumbs :crumbs="[['text' => 'About']]" />

        <div class="flex items-center justify-center w-full pt-24">
            About page WIP
        </div>

    </div>
</x-layouts.marketing>