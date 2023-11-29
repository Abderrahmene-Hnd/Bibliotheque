<?php

namespace App\view\Pages\Backend\Admin\Dashboard;

use App\Models\Book;
use App\Models\Author;
use Livewire\Component;
use App\Models\Category;
use Faker\Provider\Lorem;

class BookStore extends Component
{
    public $authors;
    public $categories;
    public $categoryinput;
    public $authorinput;
    public $titleinput;
    public $imageinput;
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
            // 'category'=>$this->categoryinput,
            // 'author'=>$this->authorinput,
            'title'=>$this->titleinput,
            // 'image'=>$this->imageinput,
            'excerpt'=>$this->excerptinput,
            'body'=>$this->bodyinput,
        ]);
        $this->titleinput=null;
        // $this->imageinput=null;
        $this->excerptinput=null;
        $this->bodyinput=null;
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.book-store');
    }
}
