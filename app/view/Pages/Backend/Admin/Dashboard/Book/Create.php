<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Book;

use App\Events\NotificationEvent;
use App\Models\Book;
use App\Models\Author;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class Create extends Component
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

    public function bookCreate()
    {
        $this->validate([
            'titleInput' => ['required', 'min:2', 'max:255'],
            'excerptInput' => ['required', 'min:5', 'max:2555'],
            'bodyInput' => ['required', 'min:5', 'max:2555'],
            'imageInput' => ['required'],
            'category_ids' => ['required'],
            'authorInput' => ['required']
        ]);

        $book=Book::create([
            'author_id' => $this->authorInput,
            'title' => $this->titleInput,
            'slug' => str::slug($this->titleInput),
            'excerpt' => $this->excerptInput,
            'body' => $this->bodyInput,
        ]);

        $book->image()->create([
            'url' => $this->imageInput->store('images'),
        ]);

        if (count($this->category_ids)>0) {
            $book->categories()->attach($this->category_ids);
         }
         NotificationEvent::dispatch($book, $notif='NewBook Created');
        redirect('/dashboard/book')->with('success', 'Your book have been created !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book.create')->layout('components.templates.app', ['title' => 'Create a Book']);
    }
}
