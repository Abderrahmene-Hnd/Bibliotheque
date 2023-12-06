<?php

namespace App\view\Pages\Backend\Client;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class ClientDashboard extends Component
{
    public $user_id;
    public $userInfos;
    public $username;
    public $email;
    public $newPassword;
    public $oldPassword;
    public function mount()
    {
        $this->user_id = auth()->user()->id;
        $this->userInfos = auth()->user();
        $this->username = $this->userInfos->username;
        $this->email = $this->userInfos->email;
    }
    public function updatedUsername()
    {
        $this->validate([
            'username' => ['required', 'min:5', 'max:255'],
        ]);
    }
    public function updatedEmail()
    {
        $this->validate([
            'email' => ['required', 'email'],
        ]);
    }
    public function updatedNewPassword()
    {
        $this->validate([
            'newPassword' => ['required', 'min:5', 'max:255'],
        ]);
    }
    public function changerUsername()
    {
        $this->validate([
            'username' => ['required', 'min:2', 'max:30']
        ]);
        User::find($this->user_id)->update(['username' => $this->username]);
        redirect('/settings')->with('success', 'Your username has been updated !');
    }
    public function changerEmail(User $user)
    {
        $this->validate([
            'email' => ['required', 'email']
        ]);
        User::find($this->user_id)->update(['email' => $this->email]);
        redirect('/settings')->with('success', 'Your email has been updated !');
    }
    public function changerPassword(User $user)
    {
        $this->validate([
            'oldPassword' => ['required'],
            'newPassword' => ['required', 'min:2', 'max:30', 'different:oldPassword']
        ]);

        if (!Hash::check($this->oldPassword, auth()->user()->password)) {
            return $this->addError('oldPassword', 'The old password is wrong');
        } else {
            User::find($this->user_id)->update(['password' => Hash::make($this->newPassword)]);
            redirect('/settings')->with('success', 'Your password has been updated !');
        }
    }
    public function render()
    {
        return view('pages.backend.client.dashboard')->layout('components.templates.app', ['title' => 'Dashboard']);
    }
}
