<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return response()->json($comments);
    }
    public function show(string $id)
    {
        $comment = Comment::find($id);
        return response()->json($comment);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'body' => 'required | min:3 | max:255'
        ]);
        $comment = Comment::create([
            'body' => request('body'),
            'user_id' => auth()->user()->id
        ]);
        return response()->json($comment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'body' => 'required | min:3 | max:255'
        ]);
        $comment = Comment::findOrFail($id);
        if ($comment->user_id !== auth()->user()->id) {
            return response()->json(['message' => 'You can only edit your own comments'], 403);
        } else {
            $comment->update([
                'body' => request('body'),
                'user_id' => $comment->user_id
            ]);
            return response()->json($comment);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        if ($comment->user_id !== auth()->user()->id) {
            return response()->json(['message' => 'You can only delete your own comments'], 403);
        } else {
            $comment->delete();
            return response()->json(['success' => 'Comment deleted']);
        }
    }
}
