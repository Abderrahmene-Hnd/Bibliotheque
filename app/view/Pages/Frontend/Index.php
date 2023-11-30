<?php

namespace App\view\Pages\Frontend;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{

    public function render()
    {
        return view('pages.frontend.index')->layout('components.templates.guest', ['title' => 'Vitrine']);
    }
}
