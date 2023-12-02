<?php

namespace App\view\Components\Atoms;

use Illuminate\View\Component;

class ShowSuccess extends Component
{
    public $name;
    public function render()
    {
        return view('components.atoms.show-success');
    }
}
