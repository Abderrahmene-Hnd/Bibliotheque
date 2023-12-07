<?php

namespace App\view\Pages\Auth;

use App\Models\Book;
use App\Models\Comment;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $comments;
    public $books;
    public function mount()
    {
        $this->comments = Comment::all();
        $this->books = Book::all();
    }

    public function login()
    {
        $attributes = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'max:30']
        ]);

        if (!auth()->attempt($attributes)) {
            return $this->addError('login', 'Invalid email or password');
        }

        session()->regenerate();
        if (auth()->user()->is_admin == true || auth()->user()->role_id < 3) {
            return redirect('/dashboard/user')->with('success', ' Welcome Back ADMIN ! ' . auth()->user()?->username);
        } else {
            return redirect('/')->with('success', ' Welcome Back ! ' . auth()->user()?->username);
        }
    }
    public function render()
    {
        return view('pages.auth.login')->layout('components.templates.auth', ['title' => 'Login']);
    }
}
