<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Book;

use App\Models\Book;
use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $books;
    public $categories;

    public function mount()
    {
        $this->books=Book::all()->sortDesc();
        $this->categories=Category::all()->sortDesc();
    }
    public function editBook($id)
    {
        Book::find($id);
        $this->redirect('/dashboard/book/'.$id.'/edit');
    }
    public function deleteBook($id)
    {
        if(auth()->user()->roles->first()?->name=='owner' || auth()->user()->roles->first()?->name=='admin')
        {
            Book::find($id)->delete();
            redirect('/dashboard/book')->with('success',' Book deleted successfully !');
        }
        else
        {
            redirect('/dashboard/book')->with('error','You do not have permission to delete this book !');
        }
    }

    public function render()
    {
        return view('pages.backend.admin.dashboard.book.index')->layout('components.templates.app',['title' => 'Books']);
    }
}
