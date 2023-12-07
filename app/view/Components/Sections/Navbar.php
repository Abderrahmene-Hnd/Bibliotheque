<?php

namespace App\view\Components\Sections;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $currentLink;
    public $class;
    public function __construct($class)
    {
        $this->class = $class;
        $this->currentLink = $_SERVER['REQUEST_URI'];
    }
    public function render()
    {
        return view('components.sections.navbar');
    }
}
