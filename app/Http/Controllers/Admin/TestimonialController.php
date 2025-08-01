<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;

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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'instansi' => 'nullable|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $base64 = 'data:' . $file->getMimeType() . ';base64,' . base64_encode(file_get_contents($file->getRealPath()));
            $data['photo'] = $base64;
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil ditambahkan');
    }

    public function edit(Testimonial $testimonial)
    {
        $categories = Category::all();
        return view('admin.testimonials.edit', compact('testimonial', 'categories'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'instansi' => 'nullable|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $base64 = 'data:' . $file->getMimeType() . ';base64,' . base64_encode(file_get_contents($file->getRealPath()));
            $data['photo'] = $base64;
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil diperbarui');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil dihapus');
    }
} 