<?php

namespace App\view\Pages\Backend\Admin;

use App\Models\Book;
use Livewire\Component;

class Dashboard extends Component
{
    public $books;
    public function mount()
    {
        $this->books=Book::all();
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard');
    }
}
