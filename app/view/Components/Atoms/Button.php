<?php

namespace App\view\Components\Atoms;

use Livewire\Component;

class Button extends Component
{
    public $content;
    public $class;
    public function render()
    {
        return view('components.atoms.button');
    }
}
