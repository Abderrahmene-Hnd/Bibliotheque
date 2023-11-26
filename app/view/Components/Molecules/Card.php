<?php

namespace App\view\Components\Molecules;

use Livewire\Component;
use App\Models\Features;

class Card extends Component
{
    private $feature;
    private $class;

    public function mount($feature,$class)
    {
        $this->feature=$feature;
        $this->class=$class;

    }

    public function render()
    {
        return view('components.molecules.card');
    }
}
