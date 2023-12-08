<?php

namespace App\view\Pages\Backend\Admin\Dashboard\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryIndex extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories=Category::all()->sortDesc();
    }

    public function editCategory($id)
    {
        Category::find($id);
        $this->redirect('/dashboard/category/'.$id.'/edit');
    }

    public function deleteCategory($id)
    {
        if(auth()->user()->roles->first()?->name=='owner' || auth()->user()->roles->first()?->name=='admin')
        {
            Category::find($id)->delete();
            redirect('/dashboard/category')->with('success',' Category deleted successfully !');
        }
        else
        {
            redirect('/dashboard/category')->with('error','You do not have permission to delete this category !');
        }

    }

    public function render()
    {
        return view('pages.backend.admin.dashboard.category.category-index')->layout('components.templates.app',['title' => 'Categories']);
    }
}
