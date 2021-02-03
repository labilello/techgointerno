<?php

namespace App\Http\Livewire\Warranties;

use App\Models\User;
use Livewire\Component;

class InternalContact extends Component
{
    public $contacts;
    protected $listeners = ['addNewLine'];

    public function mount() {
        $this->contacts = array();
    }

    public function addNewLine() {
        $this->contacts[] = array(
            'id' => '',
        );
    }

    public function removeLine($element) {
        unset($this->contacts[$element]);
    }

    public function render()
    {
        return view('livewire.warranties.internal-contact', [
            'users' => User::orderBy('name', 'asc')->get()
        ]);
    }
}
