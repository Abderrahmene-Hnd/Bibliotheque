<?php

namespace App\view\Components\Atoms;

use Livewire\Component;

class Label extends Component
{
    public $name;
    public $content;
    public $class;
    public function render()
    {
        return view('components.atoms.label');
    }
}
