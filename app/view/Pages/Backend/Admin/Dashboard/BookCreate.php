<?php

namespace App\view\Pages\Backend\Admin\Dashboard;

use App\Models\Book;
use App\Models\Author;
use App\Models\Comment;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;


class BookCreate extends Component
{
    use WithFileUploads;
    public $authors;
    public $categories;
    public $categoryinput;
    public $authorinput;
    public $titleinput;
    // public $imageinput;
    public $excerptinput;
    public $bodyinput;

    public function mount()
    {
        $this->authors=Author::all();
        $this->categories=Category::all();
    }
    public function bookcreate()
    {
        Book::create([
            'category_id'=>$this->categoryinput,
            'author_id'=>$this->authorinput,
            //'image_id'=>$this->imageinput->store('imageinput'),
            'title'=>$this->titleinput,
            'excerpt'=>$this->excerptinput,
            'body'=>$this->bodyinput,
        ]);
        redirect('/dashboard')->with('success','Your book have been created !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book-create')->layout('components.templates.app',['title' => 'Create a Book']);
    }
}
