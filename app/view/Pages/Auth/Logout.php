<?php

namespace App\view\Pages\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function mount()
    {
        auth()->logout();
    }
    public function render()
    {
        return view('pages.frontend.index');
    }
}
