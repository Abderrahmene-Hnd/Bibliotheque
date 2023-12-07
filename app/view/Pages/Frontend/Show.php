<?php

namespace App\view\Pages\Frontend;

use App\Models\Book;
use Livewire\Component;

class Show extends Component
{
    public $book;
    public function mount($id)
    {
        $this->book = Book::find($id);
    }
    public function render()
    {
        return view('pages.frontend.show')->layout('components.templates.guest', ['title' => 'Book']);
    }
}
