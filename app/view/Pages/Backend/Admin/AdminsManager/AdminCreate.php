<?php

namespace App\view\Pages\Backend\Admin\AdminsManager;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class AdminCreate extends Component
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
            'role_id'=>$this->adminType,
        ]);
        auth()->login($user);
        redirect('/dashboard')->with('success','Your Admin account has been created !');

    }
    public function render()
    {
        return view('pages.backend.admin.admins-manager.admin-create')->layout('components.templates.app',['title' => 'Create Admin']);
    }
}
