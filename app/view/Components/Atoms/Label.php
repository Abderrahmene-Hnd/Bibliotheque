<?php

namespace App\view\Components\Atoms;

use Livewire\Component;

class Label extends Component
{
    private $name;
    private $class;
    public function mount($class,$name)
    {
        $this->name=$name;
        $this->class=$class;
    }
    public function render()
    {
        return view('components.atoms.label');
    }
}
