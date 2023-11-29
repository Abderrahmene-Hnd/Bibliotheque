<?php

namespace App\view\Pages\Backend\Admin\AdminsManager;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class AdminStore extends Component
{
    public $comments;
    public function mount()
    {
        $attributes=request()->validate([
            'username'=> ['required','min:5','max:255'],
            'email'=> ['required','email'],
            'password'=> ['required','min:5','max:255'],
        ]);
        $attributes['role_id']=request()->admintype;
        $user=User::create($attributes);
        auth()->login($user);
        $this->comments= Comment::all();
        }
    public function render()
    {
        return view('pages.frontend.index');
    }
}
