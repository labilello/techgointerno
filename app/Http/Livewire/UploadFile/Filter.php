<?php

namespace App\Http\Livewire\UploadFile;

use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Filter extends Component
{
    public $order, $store;

    public function updated() {
        $this->emitUp('searchFiles', [
            'order' => ($this->order == null ? '' : $this->order),
            'store' => ($this->store == null ? '' : $this->store)
        ]);
    }

    public function mount () {
        if( ! Auth::user()->hasRole('Administrador') || stripos(Auth::user()->store->name, 'camacua') === false )
            $this->store = Auth::user()->store->name;
        else
            $this->store = '';
    }
    public function render()
    {
        return view('livewire.upload-file.filter');
    }
}
