<?php

namespace App\Http\Livewire\UploadFile;

use Livewire\Component;

class Filter extends Component
{
    public $order;

    public function updatedOrder() {
        $this->emitUp('searchFiles', ($this->order == null ? '' : $this->order) );
    }

    public function render()
    {
        return view('livewire.upload-file.filter');
    }
}
