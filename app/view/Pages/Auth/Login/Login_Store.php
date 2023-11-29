<?php

namespace App\view\Pages\Auth\Login;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;
use Illuminate\Validation\ValidationException;

class Login_Store extends Component
{
    public $comments;
    public function mount()
    {
        $attributes=request()->validate([
            'email'=> ['required','email'],
            'password'=> ['required','min:5','max:255']
        ]);
        if(!auth()->attempt($attributes))
        {
            // throw ValidationException::withMessages(['login'=>'Invalid email or password ']);
            redirect('/login');
        }
        session()->regenerate();
        $this->comments= Comment::all();

    }
    public function render()
    {
        if(auth()->user()->is_admin==true)
        {
            return view('pages.backend.admin.dashboard')->with('success',' Welcome Back ADMIN ! '.auth()->user()?->username);
        }
        else
        {
            return view('pages.frontend.index')->with('success',' Welcome Back ! '.auth()->user()?->username);
        }
    }
}
