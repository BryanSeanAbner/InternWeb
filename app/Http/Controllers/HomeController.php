<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\InternshipBenefit;
use App\Models\Requirement;
use App\Models\ApplyStep;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Post::with('category')->latest()->take(3)->get();
        $categories = Category::all();
        $testimonials = Testimonial::with('category')->get();
        $benefits = InternshipBenefit::all();
        $requirements = Requirement::all();
        $applySteps = ApplyStep::orderBy('step_number')->get();

        return view('home', compact(
            'latestPosts',
            'categories', 
            'testimonials',
            'benefits',
            'requirements',
            'applySteps'
        ));
    }
} 