<?php

namespace App\view\Components\Sections;

use Livewire\Component;

class Navbar extends Component
{
    private $class;
    public function mount($class)
    {
        $this->class=$class;
    }

    public function render()
    {
        return view('components.sections.navbar');
    }
}
