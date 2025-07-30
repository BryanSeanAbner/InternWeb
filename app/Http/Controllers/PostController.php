<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(12);
        return view('posts', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post', compact('post'));
    }
} 