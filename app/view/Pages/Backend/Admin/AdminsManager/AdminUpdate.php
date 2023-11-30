<?php

namespace App\view\Pages\Backend\Admin\AdminsManager;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class AdminUpdate extends Component
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

    public function adminedit()
    {
        $this->validate();

        $user=User::create([
            'username'=> $this->username,
            'email'=> $this->email,
            'password'=> $this->password,
            'role_id'=>2
        ]);
        auth()->login($user);
        redirect('/dashboard/admin')->with('success','Your Admin User has been updated!');

    }
    public function render()
    {
        return view('pages.backend.admin.admins-manager.admin-update')->layout('components.templates.app',['title' => 'Update the Admin']);
    }
}
