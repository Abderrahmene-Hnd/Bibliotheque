<?php

namespace App\view\Components\Sections;

use Illuminate\View\Component;

class Appnavbar extends Component
{
    public $class;
    public function __construct($class)
    {
        $this->class = $class;
    }
    public function render()
    {
        return view('components.sections.appnavbar');
    }
}
