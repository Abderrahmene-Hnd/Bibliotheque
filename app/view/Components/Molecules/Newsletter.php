<?php

namespace App\view\Components\Molecules;

use Livewire\Component;

class Newsletter extends Component
{
    public $link;

    public ?string $email = null;
    public function render()
    {
        return view('components.molecules.newsletter');
    }
}
