<?php

namespace App\view\Components\Atoms;

use App\Models\Comment;
use Livewire\Component;

class CommentCard extends Component
{
    public $comment;
    public function render()
    {
        return view('components.atoms.comment-card',['comments'=>Comment::all()]);
    }
}
