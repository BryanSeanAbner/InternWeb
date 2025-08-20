<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.kategori.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'nullable|string',
            'photo' => 'nullable|file|image|max:2048',
        ]);
        $validated['slug'] = Category::generateUniqueSlug($validated['name']);
        // Pilihan warna random (tanpa putih dan hitam)
        $colors = ['#2563eb', '#f59e42', '#e11d48', '#22c55e', '#a21caf', '#fbbf24', '#0ea5e9', '#6366f1', '#14b8a6', '#f43f5e'];
        $validated['color'] = $colors[array_rand($colors)];
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('kategori', 'public');
        }
        Category::create($validated);
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(Category $kategori)
    {
        return view('admin.kategori.edit', ['kategori' => $kategori]);
    }

    public function update(Request $request, Category $kategori)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
            'photo' => 'nullable|file|image|max:2048',
        ]);
        $kategori->name = $validated['name'];
        $kategori->slug = Category::generateUniqueSlug($validated['name'], $kategori->id);
        $kategori->description = $validated['description'] ?? null;
        if (!$kategori->color) $kategori->color = '#2563eb';
        if ($request->hasFile('photo')) {
            $kategori->photo = $request->file('photo')->store('kategori', 'public');
        }
        $kategori->save();
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diupdate.');
    }

    public function destroy(Category $kategori)
    {
        $kategori->posts()->update(['category_id' => null]);
        $kategori->delete();
        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $subcategories = $category->subcategories;
        $testimonials = \App\Models\Testimonial::where('category_id', $category->id)->get();
        return view('category', compact('category', 'subcategories', 'testimonials'));
    }
}
