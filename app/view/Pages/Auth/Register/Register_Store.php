<?php

namespace App\view\Pages\Auth\Register;

use App\Models\User;
use Livewire\Component;

class Register_Store extends Component
{
    public function mount()
    {
        $attributes=request()->validate([
            'username'=> ['required','min:5','max:255'],
            'email'=> ['required','email'],
            'password'=> ['required','min:5','max:255']
        ]);
        $user=User::create($attributes);
        auth()->login($user);
        }
    public function render()
    {
        return view('pages.frontend.index')->with('success','Your Account has been created');
    }
}
