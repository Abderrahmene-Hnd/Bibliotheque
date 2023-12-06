<?php

namespace App\Http\Controllers\Api;

use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors);
    }
    public function show(string $id)
    {
        $author = Author::with('image')->find($id);
        return response()->json($author);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Author $author, Request $request)
    {
        $request->validate([
            'name' => 'required | min:3 | max:255',
            'url' => 'required'
        ]);
        $author = Author::create([
            'name' => request('name'),
            'slug' => Str::slug(request('name'))
        ]);
        $author->image()->create([
            'url' => request('url')
        ]);
        return response()->json($author);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required | min:3 | max:255',
            'url' => 'required'
        ]);
        $author = Author::findOrFail($id);
        $author->update([
            'name' => request('name'),
            'slug' => Str::slug(request('name'))
        ]);
        $author->image()->update([
            'url' => request('url')
        ]);
        return response()->json($author);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return response()->json(['message' => 'Author deleted successfully']);
    }
}
