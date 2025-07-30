<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }

    public function show(Category $category)
    {
        $category->load('posts');
        
        return response()->json([
            'success' => true,
            'data' => $category
        ]);
    }
} 