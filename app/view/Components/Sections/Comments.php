<?php

namespace App\view\Components\Sections;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $newComment;
    public function addComments()
    {
        Comment::create([
            'body' => $this->newComment,
            'user_id' => auth()->user()->id
        ]);
        $this->newComment=null;
    }
    public function render()
    {
        return view('components.sections.comments',['comments'=>Comment::all()]);
    }
}
