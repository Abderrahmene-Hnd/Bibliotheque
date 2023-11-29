<?php

namespace App\view\Components\Atoms;

use Livewire\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $class;
    public $holder;
    public $model;

    public function render()
    {
        return view('components.atoms.input');
    }
}
