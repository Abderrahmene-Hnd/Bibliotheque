<?php

namespace App\view\Pages\Backend\Admin\AdminsManager;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class AdminCreate extends Component
{
    public $username;
    public $email;
    public $password;

    protected $rules = [
        'username'=> ['required','min:5','max:255'],
        'email'=> ['required','email'],
        'password'=> ['required','min:5','max:255']
    ];

    public function adminregister()
    {
        $this->validate();

        $user=User::create([
            'username'=> $this->username,
            'email'=> $this->email,
            'password'=> $this->password,
            'role_id'=>2
        ]);
        auth()->login($user);
        redirect('/dashboard')->with('success','Your Admin account has been created !');

    }
    public function render()
    {
        return view('pages.backend.admin.admins-manager.admin-create')->layout('components.templates.app',['title' => 'Create Admin']);
    }
}
