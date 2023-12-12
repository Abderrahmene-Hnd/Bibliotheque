<?php

namespace App\view\Components\Blocs;

use Illuminate\View\Component;

class Navbars extends Component
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
        return view('components.blocs.navbars');
    }
}
