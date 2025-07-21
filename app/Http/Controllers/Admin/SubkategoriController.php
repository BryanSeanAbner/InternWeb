<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubkategoriController extends Controller
{
    public function index($kategori)
    {
        $category = Category::where('slug', $kategori)->firstOrFail();
        $subcategories = $category->subcategories;
        return view('admin.subkategori.index', compact('category', 'subcategories'));
    }

    public function create($kategori)
    {
        $category = Category::where('slug', $kategori)->firstOrFail();
        return view('admin.subkategori.create', compact('category'));
    }

    public function store(Request $request, $kategori)
    {
        $category = Category::where('slug', $kategori)->firstOrFail();
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);
        $category->subcategories()->create($request->only('name', 'description'));
        return redirect()->route('admin.subkategori.index', $category->slug)->with('success', 'Subkategori berhasil ditambahkan.');
    }

    public function edit($kategori, Subcategory $subkategori)
    {
        $category = Category::where('slug', $kategori)->firstOrFail();
        return view('admin.subkategori.edit', ['category' => $category, 'subcategory' => $subkategori]);
    }

    public function update(Request $request, $kategori, Subcategory $subkategori)
    {
        $category = Category::where('slug', $kategori)->firstOrFail();
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);
        $subkategori->update($request->only('name', 'description'));
        return redirect()->route('admin.subkategori.index', $category->slug)->with('success', 'Subkategori berhasil diupdate.');
    }

    public function destroy($kategori, Subcategory $subkategori)
    {
        $category = Category::where('slug', $kategori)->firstOrFail();
        $subkategori->delete();
        return redirect()->route('admin.subkategori.index', $category->slug)->with('success', 'Subkategori berhasil dihapus.');
    }
} 