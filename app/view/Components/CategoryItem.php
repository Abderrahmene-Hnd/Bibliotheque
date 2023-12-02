<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CategoryItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Category $category)
    {
        $this->category=$category;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-item');
    }
}
