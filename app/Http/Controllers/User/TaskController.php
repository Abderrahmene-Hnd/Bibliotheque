<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks=auth()->user()->tasks;

        return view('pages.backend.user', compact('tasks'));
    }
}
