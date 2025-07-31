<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.kategori.index', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = Post::where('category_id', $category->id)->latest()->paginate(12);
        
        // Get subcategories if they exist
        $subcategories = $category->subcategories ?? collect();
        
        // Get testimonials for this category
        $testimonials = \App\Models\Testimonial::where('category_id', $category->id)->get();
        
        return view('category', compact('category', 'posts', 'subcategories', 'testimonials'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'slug' => \Str::slug($request->name),
        ];
        
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public/kategori', $photoName);
            $data['photo'] = 'kategori/' . $photoName;
        }

        Category::create($data);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit(Category $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Category $kategori)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'slug' => \Str::slug($request->name),
        ];
        
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public/kategori', $photoName);
            $data['photo'] = 'kategori/' . $photoName;
        }

        $kategori->update($data);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy(Category $kategori)
    {
        $kategori->delete();
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus');
    }
} 