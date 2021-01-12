<?php

namespace App\Http\Livewire\UploadFile;

use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class Input extends Component
{
    use WithFileUploads;

    public $inputTempFiles = [];
    public $tempFiles = [];
    public $order;

    public function updatedInputTempFiles() {
        $this->validate([
            'inputTempFiles.*' => 'image|max:10000', // 1MB Max
        ]);


        foreach ($this->inputTempFiles as $file)
            $this->tempFiles[] = $file;
    }

    public function storePhotos(){
        $witherror = 0;
        $path = "orderfiles/{$this->order}";

        $filescount = count( Storage::disk('local')->allFiles( "public/orderfiles/{$this->order}" ) );

        foreach ($this->tempFiles as $index=>$file) {
            try {
                $file->storeAs($path, $this->order . '_' . ( $index + $filescount ) . '.' . $file->getClientOriginalExtension(), 'local');
                $file->delete();
            } catch (FileException $e) { $witherror++; }
        }

        if( $witherror > 0 ) {
            session()->flash('type_message', 'error');
            session()->flash('message', 'Hubo un error al almacenar ' . $witherror . ' imagenes en el servidor!');
        }
        else
            session()->flash('message', 'Imagenes almacenadas correctamente!');

        $photos = new Photo([
            'order' => $this->order,
            'path' => $path,
            'store_id' => Auth::user()->store->id
        ]);

        $photos->save();
        $this->reset();
    }



    public function render()
    {
        return view('livewire.upload-file.input');
    }
}
