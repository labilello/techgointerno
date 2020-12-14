<?php

namespace App\Http\Livewire\User;

use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class MasiveImport extends Component
{
    use WithFileUploads;

    public $file;

    public function updated() {
        // Mostrar archivo subiendose
    }

    public function importUsers() {
        $f = fopen($this->file->getRealPath(), 'r');

        if( fgetcsv($f) == false ) {
            // ARCHIVO VACIO - SIN ENCABEZADOS
            return;
        }

        while ( ($data = fgetcsv($f, 1000, ";") ) !== false ) {
            $store = Store::where('name', 'LIKE', "%$data[6]%")->first();

            $user = User::create([
                'name'      => ucwords(strtolower("$data[2] $data[1]")),
                'legajo'    => $data[0],
                'phones'    => array(),
                'sector'    => $data[5],
                'role'      => $data[4],
                'email'     => $data[3],
                'password'  => Hash::make('123456789'),
                'store_id'  => ($store != null) ? $store->id : 1,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.user.masive-import');
    }
}
