<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $data = [
            'latestPosts' => Post::with('category')->latest()->take(6)->get(),
            'categories' => Category::all(),
            'testimonials' => Testimonial::with('category')->get(),
            'benefits' => InternshipBenefit::all(),
            'requirements' => Requirement::all(),
            'applySteps' => ApplyStep::orderBy('step_number')->get(),
        ];

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
} 