<?php

namespace App\view\Pages\Auth\Register;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class Register_Store extends Component
{
    public $comments;
    public function mount()
    {
        $attributes=request()->validate([
            'username'=> ['required','min:5','max:255'],
            'email'=> ['required','email'],
            'password'=> ['required','min:5','max:255']
        ]);
        $attributes['role_id']=3;
        $user=User::create($attributes);
        auth()->login($user);
        $this->comments= Comment::all();
        }
    public function render()
    {
        return view('pages.frontend.index')->with('success','Your Account has been created');
    }
}