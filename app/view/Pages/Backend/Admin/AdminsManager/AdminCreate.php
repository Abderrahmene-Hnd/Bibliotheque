<?php

namespace App\view\Pages\Backend\Admin\AdminsManager;

use App\Models\User;
use App\Models\Comment;
use Livewire\Component;

class AdminCreate extends Component
{
    public function render()
    {
        return view('pages.backend.admin.admins-manager.admin-create');
    }
}
