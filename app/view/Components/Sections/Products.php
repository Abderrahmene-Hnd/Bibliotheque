<?php

namespace App\view\Components\Sections;

use App\Models\Book;
use App\Models\Card;
use App\Models\Author;
use Livewire\Component;

class Products extends Component
{
    public $books;
    public $card;
    public function mount()
    {
        $this->books=Book::all();
        $this->card =Card::first();
    }
    public function render()
    {
        return view('components.sections.products');
    }
}
