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
        $this->comments= Comment::all();
        $this->books= Book::all();
    }
    protected $rules = [
        'email'=> ['required','email'],
        'password'=> ['required','min:5','max:255']
    ];
    public function login()
    {
        $this->validate();

        if(!auth()->attempt($this->validate()))
        {
            // throw ValidationException::withMessages(['login'=>'Invalid email or password ']);
            return redirect('/login')->with(['error'=> 'Invalid email or password']);
        }
        session()->regenerate();
        if(auth()->user()->is_admin==true)
        {
            return redirect('/dashboard/admin')->with('success',' Welcome Back ADMIN ! '.auth()->user()?->username);
        }
        else
        {
            return redirect('/')->with('success',' Welcome Back ! '.auth()->user()?->username);
        }
    }
    public function render()
    {
        return view('pages.auth.login')->layout('components.templates.auth',['title' => 'Login']);
    }
}
