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
    public $addcategory1=false;
    public $addcategory2=false;
    public $categoryInput1;
    public $categoryInput2;
    public $categoryInput3;
    public $x=0;
    public $authors;
    public $categories;
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
    public function addcategory1()
    {
        $this->addcategory1=true;
        $this->x++;
    }
    public function addcategory2()
    {
        $this->addcategory2=true;
        $this->x++;
    }
    public function bookCreate(Book $book, BookCategory $bookCategory)
    {
        $this->validate([
            'titleInput' => ['required', 'min:2', 'max:255'],
            'excerptInput' => ['required', 'min:5', 'max:2555'],
            'bodyInput' => ['required', 'min:5', 'max:2555'],
            'imageInput' => ['required'],
            'categoryInput1' => ['required'],
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

        if ($this->categoryInput1) {
            $bookCategory->create([
                'category_id' => $this->categoryInput1,
                'book_id' => Book::orderBy('id', 'desc')->first()->id
            ]);
        }
        if ($this->categoryInput2) {
            $bookCategory->create([
                'category_id' => $this->categoryInput2,
                'book_id' => Book::orderBy('id', 'desc')->first()->id
            ]);
        }
        if ($this->categoryInput3) {
            $bookCategory->create([
                'category_id' => $this->categoryInput3,
                'book_id' => Book::orderBy('id', 'desc')->first()->id
            ]);
        }

        redirect('/dashboard')->with('success', 'Your book have been created !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book.book-create')->layout('components.templates.app', ['title' => 'Create a Book']);
    }
}
