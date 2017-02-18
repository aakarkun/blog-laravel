<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $users = User::all();
        return view('blog.index', compact('posts', 'users'));
    }
}
