<?php

namespace App\view\Pages\Auth;

use App\Models\Comment;
use Livewire\Component;

class Logout extends Component
{
    public function mount()
    {
        auth()->logout();
        redirect('/login')->with('success','Good Bye ! <3');
    }
}
