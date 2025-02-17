<?php

namespace App\Livewire;

use App\Models\CrawlerConfig;
use Livewire\Component;
use LivewireUI\Modal\Modal;
use LivewireUI\Modal\ModalComponent;

class ShowSourcesModal extends ModalComponent
{
    public CrawlerConfig $config;

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public function render()
    {
        return view('livewire.show-sources-modal', [
            'sources' => $this->config->sources
        ]);
    }
}
