<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.berita.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.berita.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|file|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        $post = new Post();
        $post->title = $validated['judul'];
        $post->body = $validated['isi'];
        $post->author_id = auth()->id();
        $post->category_id = $validated['category_id'];
        $post->slug = Str::slug($validated['judul']);
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('berita', 'public');
            $post->photo = $path;
        }
        $post->save();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Post $beritum)
    {
        $categories = Category::all();
        return view('admin.berita.edit', ['post' => $beritum, 'categories' => $categories]);
    }

    public function update(Request $request, Post $beritum)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|file|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        $beritum->title = $validated['judul'];
        $beritum->body = $validated['isi'];
        $beritum->category_id = $validated['category_id'];
        $beritum->slug = Str::slug($validated['judul']);
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('berita', 'public');
            $beritum->photo = $path;
        }
        $beritum->save();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diupdate.');
    }

    public function destroy(Post $beritum)
    {
        $beritum->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
