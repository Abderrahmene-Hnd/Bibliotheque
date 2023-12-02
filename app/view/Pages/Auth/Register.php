<?php

namespace App\view\Pages\Auth;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class Register extends Component
{
    public $comments;
    public $username;
    public $email;
    public $password;
    public $passwordConfirmation;

    public function mount()
    {
        $this->comments = Comment::all();
    }
    public function updated()
    {
        $this->validate([
            'username' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'passwordConfirmation' => ['required', 'min:5', 'max:255', 'same:password'],
        ]);
    }
    public function register()
    {
        $attributes = $this->validate([
            'username' => ['required', 'min:5', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'passwordConfirmation' => ['required', 'min:5', 'max:255', 'same:password'],
        ]);

        $user = User::create([
            'username' => $attributes['username'],
            'email' => $attributes['email'],
            'password' => $attributes['password'],
            'role_id' => 3
        ]);
        auth()->login($user);
        redirect('/')->with('success', 'Your account has been created !');
    }
    public function render()
    {
        return view('pages.auth.register')->layout('components.templates.auth', ['title' => 'Register']);
    }
}
