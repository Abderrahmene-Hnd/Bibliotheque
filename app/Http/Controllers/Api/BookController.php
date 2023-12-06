<?php

namespace App\Http\Controllers\Api;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return response()->json($book);
    }

    public function show(string $id)
    {
        $book = Book::with('author', 'image', 'categories')->find($id);
        return response()->json($book);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | min:3 | max:255',
            'author_id' => 'required',
            'excerpt' => 'required | min:3',
            'body' => 'required | min:3'
        ]);
        $book = Book::create([
            'author_id' => request('author_id'),
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'excerpt' => request('excerpt'),
            'body' => request('body')
        ]);
        $book->image()->create([
            'url' => request('url')
        ]);
        return response()->json($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required | min:3 | max:255',
            'author_id' => 'required',
            'excerpt' => 'required | min:3',
            'body' => 'required | min:3'
        ]);
        $book = Book::findOrFail($id);
        $book->update([
            'author_id' => request('author_id'),
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'excerpt' => request('excerpt'),
            'body' => request('body')
        ]);
        $book->image()->update([
            'url' => request('url')
        ]);
        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return response()->json(['success' => 'Book deleted successfully']);
    }
}
