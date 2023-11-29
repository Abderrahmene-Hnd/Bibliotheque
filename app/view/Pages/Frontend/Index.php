<?php

namespace App\view\Pages\Frontend;

use App\Models\Comment;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $comments;
    public function mount()
    {
        $this->comments= Comment::all();
    }
    public function render()
    {
        return view('pages.frontend.index');
    }
}
