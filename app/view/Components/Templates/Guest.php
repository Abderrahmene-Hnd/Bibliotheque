<?php

namespace App\view\Components\Templates;

use Illuminate\View\Component;
use App\Models\Layout;

class Guest extends Component
{
    // public $layout;
    // public function __construct($layout)
    // {
    //     $this->layout= Layout::first();
    // }
    public function render()
    {
        return view('components.templates.guest');
    }
}
