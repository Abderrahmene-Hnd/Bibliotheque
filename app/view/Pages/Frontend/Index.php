<?php

namespace App\view\Pages\Frontend;

use App\Models\Comment;
use Livewire\Component;
use App\Models\Herosection;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $herosection;
    public function mount()
    {
        $this->herosection = Herosection::first();
    }

    public function render()
    {
        return view('pages.frontend.index')->layout('components.templates.guest', ['title' => 'Vitrine']);
    }
}
