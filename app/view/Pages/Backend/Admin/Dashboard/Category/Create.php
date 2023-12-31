<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;
    public $categories;
    public $newOrVariante;
    public $parentId;
    public $titleInput;
    public $imageInput;
    public function mount()
    {
        $this->categories = Category::all();
    }

    public function categoryCreate()
    {
        $this->validate([
            'titleInput' => ['required', 'min:2', 'max:255'],
            'imageInput' => ['required'],
            'newOrVariante' => $this->categories->toArray() != null ? ['required'] : [''],
            'parentId' => [$this->newOrVariante == 2 ? 'required' : ''],
        ]);

        $category = Category::create([
            'title' => $this->titleInput,
            'slug' => str::slug($this->titleInput),
            'parent_id' => $this->parentId ?? null
        ]);

        $category->image()->create([
            'url' => $this->imageInput->store('images'),
        ]);

        redirect('/dashboard/category')->with('success', 'Your category have been created !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.category.create')->layout('components.templates.app', ['title' => 'Create a Category']);
    }
}
