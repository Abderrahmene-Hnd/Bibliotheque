<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Author;

use App\Models\Author;
use Livewire\Component;

class AuthorIndex extends Component
{
    public $authors;
    public function mount()
    {
        $this->authors=Author::all()->sortDesc();
    }

    public function editAuthor($id)
    {
        Author::find($id);
        $this->redirect('/dashboard/author/'.$id.'/edit');
    }
    public function deleteAuthor($id)
    {
        if(auth()->user()->roles->first()?->name=='owner' || auth()->user()->roles->first()?->name=='admin')
        {
            Author::find($id)->delete();
            redirect('/dashboard/author')->with('success',' Author deleted successfully !');
        }
        else
        {
            redirect('/dashboard/author')->with('error','You do not have permission to delete this author !');
        }
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.author.author-index')->layout('components.templates.app',['title' => 'Authors']);
    }
}
