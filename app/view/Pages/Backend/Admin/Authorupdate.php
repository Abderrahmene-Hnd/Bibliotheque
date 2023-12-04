<?php

namespace App\view\Pages\Backend\Admin;

use App\Models\Author;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;

class Authorupdate extends ModalComponent
{
    use WithFileUploads;
    public $authorId;
    public $authorInfos;
    public $nameInput;
    public $imageInput;

    public function mount($id)
    {
        $this->authorInfos=Author::find($id);
        $this->imageInput=$this->authorInfos->image?->url;
        $this->nameInput=$this->authorInfos->name;
        $this->authorId=$id;
    }
    public function authorUpdate(Author $author)
    {
        $this->validate([
            'nameInput'=> ['required','min:2','max:255'],
            'imageInput'=> ['required']
        ]);

        $author->whereId($this->authorInfos->id)->update([
            'name'=>$this->nameInput,
            'slug'=>str::slug($this->nameInput)
        ]);
        Storage::delete($this->imageInput);
        $author->first()->image()->update([
            'url'=>$this->imageInput->store('images')
        ]);

        redirect('/dashboard')->with('success','The Author have been updated !');
    }
    public function render()
    {
        return view('pages.backend.admin.authorupdate');
    }
}
