<?php

namespace App\view\Pages\Auth;

use App\Models\Comment;
use Livewire\Component;

class Logout extends Component
{
    public $comments;
    public function mount()
    {
        auth()->logout();
        $this->comments= Comment::all();

    }
    public function render()
    {
        return view('pages.frontend.index');
    }
}
