<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Get all posts regardless of category display status
        $posts = Post::with('category')->latest()->paginate(12);
        return view('posts', compact('posts'));
    }

    public function show(Post $post)
    {
        // Get related posts from the same category, excluding current post
        $sidePosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(5)
            ->get();
            
        return view('post', compact('post', 'sidePosts'));
    }
} 