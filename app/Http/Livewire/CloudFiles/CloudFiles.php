<?php

namespace App\Http\Livewire\CloudFiles;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CloudFiles extends Component
{
    public $directories, $files, $currentDirectory, $currentDirectoryString, $counter;
    protected $listeners = ['searchDirectory'];

    public function mount() {
        $this->currentDirectory = 'cloudfiles';
        $this->currentDirectoryString = 'Carpeta principal';
    }

    public function searchDirectory ($newDirectory) {
//        dd($newDirectory);
        $this->currentDirectory = $newDirectory;

        $explode = explode('/', $newDirectory, 2);
        if( count($explode) > 1 )
            $this->currentDirectoryString = $explode[1];
    }

    public function backDirectory() {
        $explode = explode('/', $this->currentDirectory);

        if( count($explode) < 3)
            $this->mount();
        else {
            array_pop($explode);
            $this->currentDirectory = implode('/', $explode );

            array_shift($explode);
            $this->currentDirectoryString = implode('/', $explode );
        }
    }

    private function getFormated($directory) {

        $elements = explode("/", $directory);
        $file = $elements[ sizeof($elements) - 1 ];
        $asd = strripos($file, '.');

        if($asd !== false) {
            $filename = substr( $file, 0, $asd);
            $extension = substr( $file, $asd + 1 );
        } else {
            $filename = $file;
        }

        $lastmodif = Storage::disk('local')->lastModified($directory);

        return array(
            'filename' => $filename,
            'extension' => isset($extension) ? $extension : '',
            'lastmodif' => $lastmodif,
            'directory' => $directory
        );

    }

    public function render()
    {
        $this->directories = array_map(array($this, 'getFormated'),
            Storage::disk('local')->directories($this->currentDirectory, false)
        );

        $this->files = array_map(array($this, 'getFormated'),
            Storage::disk('local')->files($this->currentDirectory)
        );

        $this->counter = count($this->directories) + count($this->files);
        return view('livewire.cloud-files.cloud-files');
    }
}
