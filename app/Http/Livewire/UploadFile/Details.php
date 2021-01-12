<?php

namespace App\Http\Livewire\UploadFile;

use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Details extends Component
{
    public $photo;
    public $files = [];

    public function mount(Photo $photo) {
        $this->photo = $photo;
    }

    public function getFiles() {
        if(count( $this->files ) > 0 ) return;

        $elements = Storage::disk('local')->allFiles( $this->photo->path );
        $this->files = array_map(array($this, 'getFileName'), $elements);
    }

    public function render()
    {
        return view('livewire.upload-file.details');
    }

    private function getFileName($files) {
        $elements = explode("/", $files);
        return array_pop($elements);
    }
}
