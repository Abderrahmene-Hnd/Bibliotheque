<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function show(string $id)
    {
        $category = Category::with('image', 'children')->find($id);
        return response()->json($category);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | min:3 | max:255',
            'url' => 'required',
        ]);
        $category = Category::create([
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'parent_id' => request('parent_id') ?? null
        ]);
        $category->image()->create([
            'url' => request('url')
        ]);
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required | min:3 | max:255',
            'url' => 'required'
        ]);
        $category = Category::findOrFail($id);
        $category->update([
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'parent_id' => request('parent_id') ?? null
        ]);
        $category->image()->update([
            'url' => request('url')
        ]);
        return response()->json($category);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json(['success' => 'Category deleted successfully']);
    }
    public function nested(string $id)
    {
        $category = Category::find($id)->descendants()->get()->toTree();
        return response()->json($category);
    }
}
