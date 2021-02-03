<?php

namespace App\Http\Livewire\Warranties;

use Livewire\Component;

class Links extends Component
{
    public $links;
    protected $listeners = ['addNewLine'];

    public function mount() {
        $this->links = array();
    }

    public function addNewLine() {
        $this->links[] = array(
            'description' => '',
            'value' => '',
        );
    }

    public function removeLine($element) {
        unset($this->links[$element]);
    }

    public function render()
    {
        return view('livewire.warranties.links');
    }
}
