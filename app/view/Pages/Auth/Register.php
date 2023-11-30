<?php

namespace App\view\Pages\Auth;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class Register extends Component
{
    public $comments;
    public $username;
    public $email;
    public $password;

    public function mount()
    {
        $this->comments= Comment::all();
    }

    protected $rules = [
        'username'=> ['required','min:5','max:255'],
        'email'=> ['required','email'],
        'password'=> ['required','min:5','max:255']
    ];

    public function register()
    {
        $this->validate();

        $user=User::create([
            'username'=> $this->username,
            'email'=> $this->email,
            'password'=> $this->password,
            'role_id'=>3
        ]);
        auth()->login($user);
        redirect('/');
    }
    public function render()
    {
        return view('pages.auth.register')->layout('components.templates.auth',['title' => 'Register']);
    }
}
