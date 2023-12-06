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
        Author::find($id)->delete();
        redirect('/dashboard')->with('success',' Author deleted successfully !');

    }

    public function render()
    {
        return view('pages.backend.admin.dashboard.author.author-index')->layout('components.templates.app',['title' => 'Authors']);
    }
}
