<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubkategoriController extends Controller
{
    public function index($kategoriSlug)
    {
        $category = Category::where('slug', $kategoriSlug)->firstOrFail();
        $subcategories = Subcategory::where('category_id', $category->id)->latest()->paginate(10);
        return view('admin.subkategori.index', compact('subcategories', 'category'));
    }

    public function create($kategoriSlug)
    {
        $category = Category::where('slug', $kategoriSlug)->firstOrFail();
        return view('admin.subkategori.create', compact('category'));
    }

    public function store(Request $request, $kategoriSlug)
    {
        $category = Category::where('slug', $kategoriSlug)->firstOrFail();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['category_id'] = $category->id;
        $data['slug'] = \Str::slug($request->name);

        Subcategory::create($data);

        return redirect()->route('admin.subkategori.index', $category->slug)->with('success', 'Subkategori berhasil ditambahkan');
    }

    public function edit($kategoriSlug, Subcategory $subcategory)
    {
        $category = Category::where('slug', $kategoriSlug)->firstOrFail();
        return view('admin.subkategori.edit', compact('subcategory', 'category'));
    }

    public function update(Request $request, $kategoriSlug, Subcategory $subcategory)
    {
        $category = Category::where('slug', $kategoriSlug)->firstOrFail();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['slug'] = \Str::slug($request->name);

        $subcategory->update($data);

        return redirect()->route('admin.subkategori.index', $category->slug)->with('success', 'Subkategori berhasil diperbarui');
    }

    public function destroy($kategoriSlug, Subcategory $subcategory)
    {
        $category = Category::where('slug', $kategoriSlug)->firstOrFail();
        $subcategory->delete();
        return redirect()->route('admin.subkategori.index', $category->slug)->with('success', 'Subkategori berhasil dihapus');
    }
} 