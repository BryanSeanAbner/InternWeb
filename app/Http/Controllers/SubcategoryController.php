<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Post;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function show($categorySlug, $subcategorySlug)
    {
        $subcategory = Subcategory::whereHas('category', function($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        })->where('slug', $subcategorySlug)->firstOrFail();

        $posts = Post::where('category_id', $subcategory->category_id)
                    ->latest()
                    ->paginate(12);

        return view('subkategori', compact('subcategory', 'posts'));
    }
}
