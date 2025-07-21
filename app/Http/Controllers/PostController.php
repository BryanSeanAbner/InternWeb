<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['author', 'category'])->latest()->paginate(9);
        $title = 'Semua Berita';
        return view('posts', compact('posts', 'title'));
    }

    public function show(Post $post)
    {
        $title = $post->title;
        // Ambil berita serupa (kategori sama, bukan post ini)
        $sidePosts = \App\Models\Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(4)
            ->get();
        return view('post', compact('post', 'title', 'sidePosts'));
    }

    // Untuk AJAX modal
    public function modal(Post $post)
    {
        return view('components.post-modal', compact('post'));
    }
} 