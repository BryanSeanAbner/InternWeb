<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Requirement;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\InternshipBenefit;
use App\Models\ApplyStep;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Post::with(['author', 'category'])->latest()->take(3)->get();
        $benefits = InternshipBenefit::all();
        $categories = Category::all();
        $requirements = Requirement::all();
        $testimonials = Testimonial::with('category')->get();
        $applySteps = ApplyStep::all();
        return view('home', compact('latestPosts', 'benefits', 'categories', 'requirements', 'testimonials', 'applySteps'));
    }
} 