<?php

namespace App\view\Pages\Backend\Admin\Dashboard;

use App\Models\Author;
use Livewire\Component;
use App\Models\Category;

class BookUpdate extends Component
{
    public $authors;
    public $categories;
    public $categoryinput;
    public $authorinput;
    public $titleinput;
    public $imageinput;
    public $excerptinput;
    public $bodyinput;

    public function mount()
    {
        $this->authors=Author::all();
        $this->categories=Category::all();
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book-update');
    }
}
