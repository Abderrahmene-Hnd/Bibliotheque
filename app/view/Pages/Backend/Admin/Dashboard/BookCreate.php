<?php

namespace App\view\Pages\Backend\Admin\Dashboard;

use App\Models\Author;
use App\Models\Category;
use App\Models\Comment;
use Livewire\Component;


class BookCreate extends Component
{
    public $categories;
    public $authors;

    public function mount()
    {
        $this->categories= Category::all();
        $this->authors= Author::all();

    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book-create');
    }
}
