<?php

namespace App\Http\Livewire\Header;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $pagename = '';

    public function render()
    {
        if(!Auth::user())
            return view('livewire.header.header-guest');
        else
            return view('livewire.header.header');
    }
}
