<?php

namespace App\view\Components\Atoms;

use Livewire\Component;

class Button extends Component
{
    private $content;
    private $class;
    public function mount($content,$class)
    {
        $this->content=$content;
        $this->class=$class;
    }
    public function render()
    {
        return view('components.atoms.button');
    }
}
