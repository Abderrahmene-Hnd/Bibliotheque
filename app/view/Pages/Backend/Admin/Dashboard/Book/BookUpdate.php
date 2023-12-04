<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Book;

use App\Models\Book;
use App\Models\Author;
use Livewire\Component;
use App\Models\Category;
use App\Models\BookCategory;
use Livewire\WithFileUploads;

class BookUpdate extends Component
{
    use WithFileUploads;
    public $authors;
    public $categories;
    public $categoryInput1;
    public $categoryInput2;
    public $categoryInput3;
    public $BookId;
    public $BookInfos;
    public $categoryInput;
    public $authorInput;
    public $titleInput;
    public $imageOutput;
    public $imageInput;
    public $excerptInput;
    public $bodyInput;

    public function mount($id)
    {
        $this->BookId = $id;
        $this->BookInfos = Book::find($id);
        $this->imageOutput = $this->BookInfos->image?->url;
        $this->authorInput = $this->BookInfos->author_id;
        $this->categoryInput = $this->BookInfos->category_id;
        $this->titleInput = $this->BookInfos->title;
        $this->excerptInput = $this->BookInfos->excerpt;
        $this->bodyInput = $this->BookInfos->body;
        $this->authors = Author::all();
        $this->categories = Category::all();
    }
    public function bookUpdate(Book $book, BookCategory $bookCategory)
    {
        $this->validate([
            'titleInput' => ['required', 'min:2', 'max:255'],
            'excerptInput' => ['required', 'min:5', 'max:2555'],
            'bodyInput' => ['required', 'min:5', 'max:2555'],
            'categoryInput1' => ['required'],
            'authorInput' => ['required']
        ]);

        $book->find($this->BookId)->update([
            'author_id' => $this->authorInput,
            'title' => $this->titleInput,
            'excerpt' => $this->excerptInput,
            'body' => $this->bodyInput,
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


        if ($this->imageInput)
        {
            $book->find($this->BookId)->image()->update([
                'url' => $this->imageInput->store('images'),
            ]);
        }
        else
        {
            $book->find($this->BookId)->image()->create([
                'url' => $this->imageOutput
            ]);
        }

        redirect('/dashboard')->with('success', 'Your book have been updated !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book.book-update')->layout('components.templates.app', ['title' => 'Update the Book']);
    }
}
