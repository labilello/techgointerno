<?php

namespace App\Http\Livewire\Warranties;

use Livewire\Component;

class Add extends Component
{
    public $devices, $action, $documentation;

    public function mount() {
        $this->devices = array();
        $this->action = array();
        $this->documentation = array();
    }

    public function render()
    {
        return view('livewire.warranties.add', [
            'header' => 'Soporte tecnico - Nuevo soporte Techgo'
        ]);
    }
}
