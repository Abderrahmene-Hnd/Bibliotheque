<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Author;

use App\Models\Image;
use App\Models\Author;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AuthorCreate extends Component
{
    use WithFileUploads;

    public $nameInput;
    public $imageInput;

    public function authorCreate(Author $author)
    {
        $this->validate([
            'nameInput'=> ['required','min:2','max:255'],
            'imageInput'=> ['required']
        ]);

        $author->create([
            'name'=>$this->nameInput,
            'slug'=>str::slug($this->nameInput)
        ]);

        $author->orderBy('id', 'desc')->first()->image()->create([
            'url'=>$this->imageInput->store('images'),
        ]);

        redirect('/dashboard')->with('success','Your author have been created !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.author.author-create')->layout('components.templates.app',['title' => 'Create a Author']);
    }
}
