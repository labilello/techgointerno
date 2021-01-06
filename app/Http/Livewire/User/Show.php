<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;

    public $name, $role, $legajo, $sector, $store;

    protected $listeners = ['searchUsers' => 'search'];


    public function search($keys) {

        $this->name = $keys['name'];
        $this->role = $keys['role'];
        $this->legajo = $keys['legajo'];
        $this->sector = $keys['sector'];
        $this->store = $keys['store'];

        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'LIKE', "%$this->name%")
            ->where('role', 'LIKE', "%$this->role%")
            ->where('legajo', 'LIKE', "%$this->legajo%")
            ->where('sector', 'LIKE', "%$this->sector%")
            ->where('store_id', 'LIKE', $this->store)
            ->orderBy('name', 'ASC')
            ->paginate(15);


        return view('livewire.user.show', [
            'users' => $users
        ]);
    }
}
