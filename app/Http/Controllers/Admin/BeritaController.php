<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(10);
        return view('admin.berita.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.berita.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'title' => $request->judul,
            'body' => $request->isi,
            'category_id' => $request->category_id,
            'slug' => \Str::slug($request->judul),
        ];
        
        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public', $photoName);
            $data['photo'] = $photoName;
        }

        Post::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(Post $beritum)
    {
        $categories = Category::all();
        return view('admin.berita.edit', compact('beritum', 'categories'));
    }

    public function update(Request $request, Post $beritum)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'title' => $request->judul,
            'body' => $request->isi,
            'category_id' => $request->category_id,
            'slug' => \Str::slug($request->judul),
        ];
        
        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public', $photoName);
            $data['photo'] = $photoName;
        }

        $beritum->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(Post $beritum)
    {
        $beritum->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus');
    }
} 