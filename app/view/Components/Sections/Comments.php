<?php

namespace App\view\Components\Sections;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;

    public $newComment;
    public function mount()
    {
    }
    public function addComments()
    {
        $comment = Comment::create([
            'body' => $this->newComment,
            'user_id' => auth()->user()->id,
        ]);
        redirect('/');
    }
    public function getCommentsProperty()
    {
        return Comment::paginate(2);
    }
    public function render()
    {
        return view('components.sections.comments');
    }
}
