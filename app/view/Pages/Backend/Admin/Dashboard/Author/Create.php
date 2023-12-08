<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Author;

use App\Models\Image;
use App\Models\Author;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $nameInput;
    public $imageInput;

    public function authorCreate()
    {
        $this->validate([
            'nameInput' => ['required', 'min:2', 'max:255'],
            'imageInput' => ['required']
        ]);

        $author = Author::create([
            'name' => $this->nameInput,
            'slug' => str::slug($this->nameInput)
        ]);

        $author->image()->create([
            'url' => $this->imageInput->store('images'),
        ]);

        redirect('/dashboard/author')->with('success', 'Your author have been created !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.author.create')->layout('components.templates.app', ['title' => 'Create a Author']);
    }
}
