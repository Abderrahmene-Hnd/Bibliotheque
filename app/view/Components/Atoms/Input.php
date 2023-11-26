<?php

namespace App\view\Components\Atoms;

use Livewire\Component;

class Input extends Component
{
    private $name;
    private $type;
    private $link;
    private $class;
    private $holder;

    public function mount($name, $type, $link, $class, $holder)
    {
        $this->name = $name;
        $this->type = $type;
        $this->link = $link;
        $this->class = $class;
        $this->placeholder = $holder;
    }
    public function render()
    {
        return view('components.atoms.input');
    }
}
