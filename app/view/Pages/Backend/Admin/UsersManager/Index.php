<?php

namespace App\view\Pages\Backend\Admin\UsersManager;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $users;
    public function mount()
    {
        $this->users=User::all();
    }
    public function editAdmin($id)
    {
        $UserId=User::find($id);
        $this->redirect('/dashboard/user/'.$id.'/edit');
    }

    public function deleteAdmin($id)
    {
        User::whereId($id)->delete();
        redirect('/dashboard/admin')->with('success',' User deleted successfully !');
    }
    public function render()
    {
        return view('pages.backend.admin.users-manager.index')->layout('components.templates.app',['title' => 'Admins manager']);
    }
}
