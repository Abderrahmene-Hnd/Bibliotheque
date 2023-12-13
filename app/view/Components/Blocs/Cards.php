<?php

namespace App\view\Components\Blocs;

use Livewire\Component;
use App\Models\Category;

class Cards extends Component
{
    public $nmbr;
    public $bg_pry_color;
    public $bg_pry_hov_color;
    public $bg_sec_color;
    public $bg_sec_hov_color;
    public $txt_pry_color;
    public $txt_pry_hov_color;
    public $txt_sec_color;
    public $txt_sec_hov_color;
    public $book;
    public $categories;
    public $class;
    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('components.blocs.cards');
    }
}
