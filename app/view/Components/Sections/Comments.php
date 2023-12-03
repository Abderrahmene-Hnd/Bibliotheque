<?php

namespace App\view\Components\Sections;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;

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
        return Comment::all()->sortDesc();
    }
    public function render()
    {
        return view('components.sections.comments');
    }
}
