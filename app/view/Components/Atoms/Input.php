<?php

namespace App\view\Components\Atoms;

use Livewire\Component;

class Input extends Component
{
    private $name;
    private $type;
    private $class;
    private $holder;

    public function mount($name, $type, $class, $holder)
    {
        $this->name = $name;
        $this->type = $type;
        $this->class = $class;
        $this->holder = $holder;
    }
    public function render()
    {
        return view('components.atoms.input');
    }
}
