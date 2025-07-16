<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;

class Dashboard extends Component
{
    public $latestPosts;

    public function __construct()
    {
        $this->latestPosts = Post::with(['author', 'category'])->latest()->take(3)->get();
    }

    public function render()
    {
        return view('components.dashboard')->with(['latestPosts' => $this->latestPosts]);
    }
} 