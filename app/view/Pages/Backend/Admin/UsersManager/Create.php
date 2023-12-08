<?php

namespace App\view\Pages\Backend\Admin\UsersManager;

use App\Models\Role;
use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class Create extends Component
{
    public $usernameInput;
    public $emailInput;
    public $passwordInput;
    public $adminType;

    public function adminCreate()
    {
        $this->validate([
            'usernameInput'=> ['required','min:5','max:255'],
            'emailInput'=> ['required','email'],
            'passwordInput'=> ['required','min:5','max:255'],
            'adminType'=> ['required']
        ]);

        $user=User::create([
            'username'=> $this->usernameInput,
            'email'=> $this->emailInput,
            'password'=> $this->passwordInput,
        ]);
        $user->addRole($this->adminType == 1? 'admin' : ($this->adminType == 2?'manager' : 'client'));
        auth()->login($user);
        redirect('/dashboard')->with('success','Your Admin account has been created !');

    }
    public function render()
    {
        return view('pages.backend.admin.users-manager.create')->layout('components.templates.app',['title' => 'Create Admin']);
    }
}
