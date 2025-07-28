<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\Category;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::with('category')->latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.testimonials.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'instansi' => 'nullable|string|max:255',
        ]);

        $testimonial = new Testimonial($validated);
        if ($request->hasFile('photo')) {
            $testimonial->photo = $request->file('photo')->store('testimonials', 'public');
        }
        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        $categories = Category::all();
        return view('admin.testimonials.edit', compact('testimonial', 'categories'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'instansi' => 'nullable|string|max:255',
        ]);

        $testimonial->update($validated);
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($testimonial->photo && \Storage::disk('public')->exists($testimonial->photo)) {
                \Storage::disk('public')->delete($testimonial->photo);
            }
            $testimonial->photo = $request->file('photo')->store('testimonials', 'public');
            $testimonial->save();
        }

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil diupdate.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil dihapus.');
    }
} 