<?php

namespace App\Http\Livewire\UploadFile;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FileList extends Component
{
    public $order, $store;
    protected $listeners = ['searchFiles' => 'search'];

    public function mount() {
        $this->order = '';

        if( Auth::user()->hasRole('Administrador') || stripos(Auth::user()->store->name, 'camacua') )
            $this->store = '';
        else
            $this->store = Auth::user()->store->name;
    }

    public function search($data) {
        $this->store = $data['store'];
        $this->order = $data['order'];
    }

    public function render()
    {
        $order = $this->order;
        $store = $this->store;

        $photos = Photo::where('order', 'LIKE', "%{$order}%")
            ->whereHas('store', function (Builder $query) use ($store) {
                $query->where('name', 'like', "%{$store}%");
            })
            ->orderBy('updated_at', 'asc')
            ->get();

        return view('livewire.upload-file.file-list', [
            'photos' => $photos
        ]);
    }
}
