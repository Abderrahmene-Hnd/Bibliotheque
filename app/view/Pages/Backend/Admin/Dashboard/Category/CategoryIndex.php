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
        Category::find($id)->delete();
        redirect('/dashboard')->with('success',' Category deleted successfully !');

    }

    public function render()
    {
        return view('pages.backend.admin.dashboard.category.category-index')->layout('components.templates.app',['title' => 'Categories']);
    }
}
