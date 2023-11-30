<?php

namespace App\view\Pages\Backend\Admin;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $books;

    public function mount()
    {
        $this->books=Book::all();
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard')->layout('components.templates.app',['title' => 'Dashboard']);
    }
}
