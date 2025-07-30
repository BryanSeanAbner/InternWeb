<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::with('category')->get();
        
        return response()->json([
            'success' => true,
            'data' => $testimonials
        ]);
    }
} 