<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil statistik
        $totalBerita = Post::count();
        $totalKategori = Category::count();
        $totalTestimoni = Testimonial::count();
        
        // Berita terbaru (5 terakhir)
        $beritaTerbaru = Post::with('category')->latest()->take(5)->get();
        
        // Kategori dengan jumlah berita terbanyak
        $kategoriPopuler = Category::withCount('posts')
            ->orderBy('posts_count', 'desc')
            ->take(5)
            ->get();
        
        return view('admin.dashboard', compact(
            'totalBerita',
            'totalKategori', 
            'totalTestimoni',
            'beritaTerbaru',
            'kategoriPopuler'
        ));
    }
} 