<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Book;

use App\Models\Book;
use App\Models\Author;
use App\Models\Comment;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\BookCategory;
use Livewire\WithFileUploads;


class BookCreate extends Component
{
    use WithFileUploads;

    public $authors;
    public $categories;
    public $category_ids;
    public $authorInput;
    public $titleInput;
    public $imageInput;
    public $excerptInput;
    public $bodyInput;

    public function mount()
    {
        $this->authors = Author::all();
        $this->categories = Category::all();
    }

    public function bookCreate(Book $book, BookCategory $bookCategory)
    {
        $this->validate([
            'titleInput' => ['required', 'min:2', 'max:255'],
            'excerptInput' => ['required', 'min:5', 'max:2555'],
            'bodyInput' => ['required', 'min:5', 'max:2555'],
            'imageInput' => ['required'],
            'category_ids' => ['required'],
            'authorInput' => ['required']
        ]);

        $book->create([
            'author_id' => $this->authorInput,
            'title' => $this->titleInput,
            'slug' => str::slug($this->titleInput),
            'excerpt' => $this->excerptInput,
            'body' => $this->bodyInput,
        ]);

        $book->orderBy('id', 'desc')->first()->image()->create([
            'url' => $this->imageInput->store('images'),
        ]);

        if (count($this->category_ids)>0) {
            $book->orderBy('id', 'desc')->first()->categories()->attach($this->category_ids);
         }

        redirect('/dashboard')->with('success', 'Your book have been created !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book.book-create')->layout('components.templates.app', ['title' => 'Create a Book']);
    }
}
