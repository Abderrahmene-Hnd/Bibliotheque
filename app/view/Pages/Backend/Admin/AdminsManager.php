<?php

namespace App\view\Pages\Backend\Admin;

use App\Models\User;
use Livewire\Component;

class AdminsManager extends Component
{
    public $users;
    public function mount()
    {
        $this->users=User::all();

    }
    public function render()
    {
        return view('pages.backend.admin.admins-manager')->layout('components.templates.app',['title' => 'Admins manager']);
    }
}
