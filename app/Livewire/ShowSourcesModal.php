<?php

namespace App\Livewire;

use Livewire\Component;
use LivewireUI\Modal\Modal;
use LivewireUI\Modal\ModalComponent;

class ShowSourcesModal extends ModalComponent
{
    public $sources;

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public function render()
    {
        return view('livewire.show-sources-modal');
    }
}
