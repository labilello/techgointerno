<?php

namespace App\Http\Livewire\Warranties;

use Livewire\Component;

class Documentation extends Component
{
    public $documents;
    protected $listeners = ['addNewLine'];

    public function mount() {
        $this->documents = array();
    }

    public function addNewLine() {
        $this->documents[] = array(
            'value' => '',
        );
    }

    public function removeLine($element) {
        unset($this->documents[$element]);
    }

    public function render()
    {
        return view('livewire.warranties.documentation');
    }
}
