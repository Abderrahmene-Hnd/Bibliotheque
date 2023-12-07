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
    public $BookId;
    public $book;
    public $category_ids =[] ;
    public $authorInput;
    public $titleInput;
    public $imageOutput;
    public $imageInput;
    public $excerptInput;
    public $bodyInput;

    public function mount($id)
    {
        $this->BookId = $id;
        $this->book = Book::find($id);
        $this->imageOutput = $this->book->image?->url;
        $this->authorInput = $this->book->author_id;
        $this->category_ids = $this->book->categories->pluck('id')->toArray();
        $this->titleInput = $this->book->title;
        $this->excerptInput = $this->book->excerpt;
        $this->bodyInput = $this->book->body;
        $this->authors = Author::all();
        $this->categories = Category::all();
    }
    public function bookUpdate(Book $book, BookCategory $bookCategory)
    {
        $this->validate([
            'titleInput' => ['required', 'min:2', 'max:255'],
            'excerptInput' => ['required', 'min:5', 'max:2555'],
            'bodyInput' => ['required', 'min:5', 'max:2555'],
            'category_ids.*' => 'sometimes|exists:categories,id',
            'authorInput' => ['required']
        ]);

        $book->find($this->BookId)->update([
            'author_id' => $this->authorInput,
            'title' => $this->titleInput,
            'excerpt' => $this->excerptInput,
            'body' => $this->bodyInput,
        ]);

        if (count($this->category_ids)>0) {
           Book::find($this->BookId)->categories()->sync($this->category_ids);
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

        redirect('/dashboard/book')->with('success', 'Your book have been updated !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book.book-update')->layout('components.templates.app', ['title' => 'Update the Book']);
    }
}
