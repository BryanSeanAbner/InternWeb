<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(12);
        
        return response()->json([
            'success' => true,
            'data' => $posts
        ]);
    }

    public function show(Post $post)
    {
        $post->load('category');
        
        return response()->json([
            'success' => true,
            'data' => $post
        ]);
    }

    public function latest()
    {
        $posts = Post::with('category')->latest()->take(6)->get();
        
        return response()->json([
            'success' => true,
            'data' => $posts
        ]);
    }
} 