<?php

namespace App\Http\Livewire\Warranties;

use Livewire\Component;

class ExternalContact extends Component
{
    public $contacts;
    protected $listeners = ['addNewLine'];

    public function mount() {
        $this->contacts = array();
    }

    public function addNewLine() {
        $this->contacts[] = array(
            'description' => '',
            'value' => '',
            'type' => '',
        );
    }

    public function removeLine($element) {
        unset($this->contacts[$element]);
    }

    public function render()
    {
        return view('livewire.warranties.external-contact');
    }
}
