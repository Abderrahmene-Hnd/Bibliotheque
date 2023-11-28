<?php

namespace App\view\Pages\Auth\PasswordManager;

use Livewire\Component;

class ResetPassword_Create extends Component
{
    private $token;
    public function mount($token)
    {
        $this->token=$token;
    }
    public function render()
    {
        return view('pages.auth.PasswordManager.new-password');
    }
}
