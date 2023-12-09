<?php

namespace App\view\Components\Sections;

use App\Models\Book;
use App\Models\Author;
use Livewire\Component;

class Products extends Component
{
    public $books;
    public function mount()
    {
        $this->books=Book::all();
    }
    public function render()
    {
        return view('components.sections.products');
    }
}
