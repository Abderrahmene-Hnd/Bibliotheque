<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Author;

use App\Models\Author;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Update extends Component
{
    use WithFileUploads;
    public $authorId;
    public $authorInfos;
    public $nameInput;
    public $imageOutput;
    public $imageInput;

    public function mount($id)
    {
        $this->authorInfos=Author::find($id);
        $this->imageOutput=$this->authorInfos->image?->url;
        $this->nameInput=$this->authorInfos->name;
        $this->authorId=$id;
    }
    public function authorUpdate(Author $author)
    {
        $this->validate([
            'nameInput'=> ['required','min:2','max:255'],
        ]);

        $author->find($this->authorInfos->id)->update([
            'name'=>$this->nameInput,
            'slug'=>str::slug($this->nameInput)
        ]);
        if ($this->imageInput)
        {
            $author->find($this->authorId)->image()->update([
                'url' => $this->imageInput->store('images'),
            ]);
        }
        else
        {
            $author->find($this->authorId)->image()->create([
                'url' => $this->imageOutput
            ]);
        }

        redirect('/dashboard/author')->with('success','The Author have been updated !');
    }

    public function render()
    {
        return view('pages.backend.admin.dashboard.author.update')->layout('components.templates.app',['title' => 'Edit the Author']);
    }
}
