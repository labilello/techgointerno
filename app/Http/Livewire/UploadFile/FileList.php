<?php

namespace App\Http\Livewire\UploadFile;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class FileList extends Component
{
    public $order;
    public $directories = [];

    protected $listeners = ['searchFiles' => 'search'];

    public function mount(){
        $this->order = '';
        $this->search($this->order);
    }

    public function search($order) {
        $this->order = $order;
        $directories = Storage::disk('local')->directories('orderfiles/' . $this->order );
        $this->directories = array_map(array($this, 'getDirectoryName'), $directories);
    }

    public function render()
    {
        return view('livewire.upload-file.file-list',);
    }

    private function getDirectoryName($directory) {
         $elements = explode("/", $directory);
         return array_pop($elements);
    }
}
