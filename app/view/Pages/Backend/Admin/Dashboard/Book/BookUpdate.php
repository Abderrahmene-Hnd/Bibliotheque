<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Book;

use App\Models\Book;
use App\Models\Author;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class BookUpdate extends Component
{
    use WithFileUploads;
    public $authors;
    public $categories;
    public $BookId;
    public $BookInfos;
    public $categoryInput;
    public $authorInput;
    public $titleInput;
    public $imageInput;
    public $excerptInput;
    public $bodyInput;

    public function mount($id)
    {
        $this->BookId = $id;
        $this->BookInfos = Book::find($id);
        $this->imageInput = $this->BookInfos->image?->url;
        $this->authorInput = $this->BookInfos->author_id;
        $this->categoryInput = $this->BookInfos->category_id;
        $this->titleInput = $this->BookInfos->title;
        $this->excerptInput = $this->BookInfos->excerpt;
        $this->bodyInput = $this->BookInfos->body;
        $this->authors = Author::all();
        $this->categories = Category::all();
    }
    public function bookUpdate(Book $book)
    {
        $this->validate([
            'titleInput' => ['required', 'min:2', 'max:255'],
            'excerptInput' => ['required', 'min:5', 'max:255'],
            'bodyInput' => ['required', 'min:5', 'max:255'],
            'imageInput' => ['required'],
            'categoryInput' => ['required'],
            'authorInput' => ['required']
        ]);

        $book->find($this->BookId)->update([
            'category_id' => $this->categoryInput,
            'author_id' => $this->authorInput,
            'title' => $this->titleInput,
            'excerpt' => $this->excerptInput,
            'body' => $this->bodyInput,
        ]);

        if ($this->imageInput)
        {
            $book->find($this->bookId)->image()->update([
                'url' => $this->imageInput->store('images'),
            ]);
        }
        else
        {
            $book->find($this->bookId)->image()->create([
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
