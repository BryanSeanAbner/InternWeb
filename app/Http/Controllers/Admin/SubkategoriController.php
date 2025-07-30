<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubkategoriController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::latest()->paginate(10);
        return view('admin.subkategori.index', compact('subcategories'));
    }

    public function create()
    {
        return view('admin.subkategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Subcategory::create($request->all());

        return redirect()->route('admin.subkategori.index')->with('success', 'Subkategori berhasil ditambahkan');
    }

    public function edit(Subcategory $subcategory)
    {
        return view('admin.subkategori.edit', compact('subcategory'));
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $subcategory->update($request->all());

        return redirect()->route('admin.subkategori.index')->with('success', 'Subkategori berhasil diperbarui');
    }

    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('admin.subkategori.index')->with('success', 'Subkategori berhasil dihapus');
    }
} 