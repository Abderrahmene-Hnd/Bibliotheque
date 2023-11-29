<?php

namespace App\view\Components\Atoms;

use Livewire\Component;
use App\Models\Features;

class Card extends Component
{
    public $feature;
    public $class;
    public function render()
    {
        return view('components.atoms.card');
    }
}
