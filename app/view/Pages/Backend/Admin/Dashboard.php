<?php

namespace App\view\Pages\Backend\Admin;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $books;
    public $categories;
    public $authors;

    public function mount()
    {
        $this->books=Book::all()->sortDesc();
        $this->categories=Category::all()->sortDesc();
        $this->authors=Author::all()->sortDesc();
    }
    public function editBook($id)
    {
        book::find($id);
        $this->redirect('/dashboard/book/'.$id.'/edit');
    }

    public function editCategory($id)
    {
        Category::find($id);
        $this->redirect('/dashboard/category/'.$id.'/edit');
    }

    public function editAuthor($id)
    {
        Author::find($id);
        $this->redirect('/dashboard/author/'.$id.'/edit');
    }

    public function deleteBook($id)
    {
        Book::whereId($id)->delete();
        redirect('/dashboard')->with('success',' Book deleted successfully !');

    }

    public function deleteCategory($id)
    {
        Category::whereId($id)->delete();
        redirect('/dashboard')->with('success',' Category deleted successfully !');

    }

    public function deleteAuthor($id)
    {
        Author::whereId($id)->delete();
        redirect('/dashboard')->with('success',' Author deleted successfully !');

    }

    public function render()
    {
        return view('pages.backend.admin.dashboard')->layout('components.templates.app',['title' => 'Dashboard']);
    }
}
