<?php

namespace App\view\Pages\Backend\Client;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ClientDashboard extends Component
{
    public $username;
    public $email;
    public $password;

    public function changerUsername()
    {
        $this->validate([
            'username'=>['required','min:2','max:30']
        ]);
        User::where('id',auth()->user()->id)->update(['username'=> $this->username]);
        redirect('/settings')->with('success','Your username has been updated !');
    }
    public function changerEmail(User $user)
    {
        $this->validate([
            'email'=>['required','email']
        ]);
        User::where('id',auth()->user()->id)->update(['email'=> $this->email]);
        redirect('/settings')->with('success','Your email has been updated !');

    }
    public function changerPassword(User $user)
    {
        $this->validate([
            'password'=>['required','min:2','max:30']
        ]);
        User::where('id',auth()->user()->id)->update(['password'=> Hash::make($this->password)]);
        redirect('/settings')->with('success','Your password has been updated !');
    }
    public function render()
    {
        return view('pages.backend.client.dashboard')->layout('components.templates.app',['title' => 'Dashboard']);
    }
}
