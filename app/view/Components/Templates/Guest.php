<?php

namespace App\view\Components\Templates;

use App\Models\Layout;
use App\Models\Navbar;
use Livewire\Component;

class Guest extends Component
{
    // public $navbar;
    // public function mount()
    // {
    //     $this->navbar= Navbar::first();
    // }
    public function render()
    {
        return view('components.templates.guest');
    }
}
