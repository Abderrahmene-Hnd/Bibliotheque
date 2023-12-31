<?php

namespace App\view\Pages\Backend\Admin\UsersManager;

use App\Models\Role;
use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class Update extends Component
{
    public $userInfos;
    public $comments;
    public $userId;
    public $usernameInput;
    public $emailInput;
    public $passwordInput;
    public $adminType;

    public function mount($id)
    {
        $this->userInfos = User::find($id);
        $this->adminType = $this->userInfos->roles->first()->id;
        $this->usernameInput = $this->userInfos->username;
        $this->emailInput = $this->userInfos->email;
        $this->userId = $id;
        $this->comments = Comment::all();
    }
    public function adminEdit(User $user)
    {
        $this->validate([
            'usernameInput' => ['required', 'min:5', 'max:255'],
            'emailInput' => ['required', 'email'],
            'passwordInput' => ['required', 'min:5', 'max:255'],
            'adminType' => ['required']
        ]);
        $user->find($this->userId)->update([
            'username' => $this->usernameInput,
            'email' => $this->emailInput,
            'password' => $this->passwordInput,
        ]);
        $user->find($this->userId)->syncRoles($this->adminType == 2? ['admin'] : ($this->adminType == 3? ['manager'] :($this->adminType == 4? ['client']:[''])));
        redirect('/dashboard/user')->with('success', 'Your Admin User has been updated!');
    }
    public function render()
    {
        return view('pages.backend.admin.users-manager.update')->layout('components.templates.app', ['title' => 'Update the Admin']);
    }
}
