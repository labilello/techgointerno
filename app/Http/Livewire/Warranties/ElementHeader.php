<?php

namespace App\Http\Livewire\Warranties;

use Livewire\Component;

class ElementHeader extends Component
{
    public $description;

    public function mount($description) {
        $this->description = $description;
    }

    public function render()
    {
        return view('livewire.warranties.element-header');
    }
}
