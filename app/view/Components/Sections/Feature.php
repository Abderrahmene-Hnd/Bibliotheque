<?php

namespace App\view\Components\Sections;

use Livewire\Component;
use App\Models\Features;

class feature extends Component
{
    public $features;
    public function mount()
    {
        $this->features=Features::all();
    }
    public function render()
    {
        return view('components.sections.feature');
    }
}
