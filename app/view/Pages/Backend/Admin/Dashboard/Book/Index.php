<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Book;

use App\Models\Book;
use App\Models\Author;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Collection;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public ?string $search = '';
    public ?int $author_id = null;
    public Collection $authors;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all()->sortDesc();
        $this->authors = Author::pluck('name', 'id');
    }
    public function editBook($id)
    {
        Book::find($id);
        $this->redirect('/dashboard/book/' . $id . '/edit');
    }
    public function deleteBook($id)
    {
        if (
            auth()
            ->user()
            ->hasRole('owner|admin')
        ) {
            Book::find($id)->delete();
            redirect('/dashboard/book')->with('success', ' Book deleted successfully !');
        } else {
            redirect('/dashboard/book')->with('error', 'You do not have permission to delete this book !');
        }
    }
    public function updating($key): void
    {
        if ($key === 'search' || $key === 'author_id') {
            $this->resetPage();
        }
    }
    public function getBooksProperty()
    {
        return Book::when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%')->orWhere(function ($query) {
                $query->whereHas('categories', function ($author) {
                    $author->where('title', 'like', '%' . $this->search . '%');
                });
            });
        })
            ->when($this->author_id, function ($query) {
                $query->whereHas('author', function ($author) {
                    $author->where('id', $this->author_id);
                });
            })
            ->paginate(4);
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book.index')->layout('components.templates.app', ['title' => 'Books']);
    }
}
