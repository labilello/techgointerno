<?php

namespace App\Http\Livewire\Warranties;

use Livewire\Component;

class DeviceList extends Component
{
    public $devices;
    protected $listeners = ['addNewLine'];

    public function mount() {
        $this->devices = array();
    }

    public function addNewLine() {
        $this->devices[] = array(
            'type' => '',
            'warranty' => '',
            'outwarranty' => '',
            'origin' => '',
        );
    }

    public function removeLine($element) {
        unset($this->devices[$element]);
    }

    public function render()
    {
        return view('livewire.warranties.device-list');
    }
}
