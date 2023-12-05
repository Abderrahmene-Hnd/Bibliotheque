<?php

namespace App\Http\Controllers\Api;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function index()
    {
        $author=Author::all();
        return response()->json($author);
    }
}
