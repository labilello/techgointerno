<?php

namespace App\Http\Livewire\Warranties;

use Livewire\Component;

class ClientActions extends Component
{
    public $actions;
    protected $listeners = ['addNewLine'];

    public function mount() {
        $this->actions = array();
    }

    public function addNewLine() {
        $this->actions[] = array(
            'type' => '',
            'value' => '',
        );
    }

    public function removeLine($element) {
        unset($this->actions[$element]);
    }

    public function render()
    {
        return view('livewire.warranties.client-actions');
    }
}
