<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Book;

use App\Models\Book;
use App\Models\Category;
use Livewire\Component;

class BookIndex extends Component
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
        Book::find($id)->delete();
        redirect('/dashboard')->with('success',' Book deleted successfully !');
    }

    public function render()
    {
        return view('pages.backend.admin.dashboard.book.book-index')->layout('components.templates.app',['title' => 'Books']);
    }
}
