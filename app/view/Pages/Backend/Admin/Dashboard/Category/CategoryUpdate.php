<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CategoryUpdate extends Component
{
    use WithFileUploads;
    public $categories;
    public $categoryId;
    public $categoryInfos;
    public $titleInput;
    public $imageInput;
    public $imageOutput;
    public $newOrVariante;
    public $parentId;

    public function mount($id)
    {
        $this->categories = Category::all();
        $this->categoryInfos = Category::find($id);
        $this->imageOutput = $this->categoryInfos->image?->url;
        $this->titleInput = $this->categoryInfos->title;
        $this->categoryInfos->parent_id == null ? $this->newOrVariante = 1 : $this->newOrVariante = 2;
        $this->parentId = $this->categoryInfos->parent_id;
        $this->categoryId = $id;
    }
    public function categoryUpdate(Category $category)
    {
        $attributes = $this->validate([
            'titleInput' => ['required', 'min:2', 'max:255'],
            'newOrVariante' => ['required'],
            'parentId' => [$this->newOrVariante == 2 ? 'required' : ''],
        ]);

        $category->find($this->categoryId)->update([
            'title' => $this->titleInput,
            'slug' => str::slug($this->titleInput),
            'parent_id' => $this->parentId ?? null
        ]);

        if ($this->imageInput)
        {
            $category->find($this->categoryId)->image()->update([
                'url' => $this->imageInput->store('images'),
            ]);
        }
        else
        {
            $category->find($this->categoryId)->image()->create([
                'url' => $this->imageOutput
            ]);
        }

        redirect('/dashboard')->with('success', 'The Category have been updated !');
    }
    public function render()
    {
        return view('pages.backend.admin.dashboard.category.category-update')->layout('components.templates.app', ['title' => 'Edit the category']);
    }
}
