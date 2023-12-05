<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $author=Author::all();
        $category=Category::all();
    }
}
