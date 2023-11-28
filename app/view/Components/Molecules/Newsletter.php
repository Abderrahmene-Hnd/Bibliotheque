<?php

namespace App\view\Components\Molecules;

use Livewire\Component;

class Newsletter extends Component
{
    private $link;
    public function mount($link)
    {
        $this->link=$link;
    }
    public function render()
    {
        return view('components.molecules.newsletter');
    }
}
