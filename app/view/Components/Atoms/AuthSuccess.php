<?php

namespace App\view\Components\Atoms;

use Livewire\Component;
use Illuminate\Contracts\Session\Session;

class AuthSuccess extends Component
{
    public function mount( )
    {
        //
    }
    public function render()
    {
        return view('components.atoms.auth-success');
    }
}
