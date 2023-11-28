<?php

namespace App\view\Pages\Auth\Login;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\ValidationException;

class Login_Store extends Component
{
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
    }
    public function render()
    {
        return view('pages.frontend.index')->with('success',' Welcome Back ! '.auth()->user()?->username);
    }
}
