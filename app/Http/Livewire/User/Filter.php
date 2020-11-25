<?php

namespace App\Http\Livewire\User;

use App\Models\Store;
use Livewire\Component;

class Filter extends Component
{
    public $name, $role, $legajo, $sector, $store;

    public function updated() {
        $this->emitUp('searchUsers', [
            'name' => ($this->name == null ? '' : $this->name),
            'role' => ($this->role == null ? '' : $this->role),
            'legajo' => ($this->legajo == null ? '' : $this->legajo),
            'sector' => ($this->sector == null ? '' : $this->sector),
            'store' => ($this->store == null ? '%%' : $this->store)
        ]);
    }

    public function render()
    {
        return view('livewire.user.filter', [
            'stores' => Store::all()
        ]);
    }
}
