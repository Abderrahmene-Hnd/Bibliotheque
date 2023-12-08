<?php

namespace App\view\Pages\Backend\Admin\Dashboard;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $books;
    public $categories;
    public $authors;
    public function mount()
    {
        $this->books=Book::all();
        $this->categories=Category::all();
        $this->authors=Author::all();
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.index')->layout('components.templates.app',['title' => 'Dashboard']);
    }
}
