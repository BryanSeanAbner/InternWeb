@extends('layouts.admin')
@section('admin-title', 'Edit Testimonial')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-xl font-bold mb-6">Edit Testimonial</h2>
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-semibold mb-1">Photo</label>
            <input type="file" name="photo" class="border rounded w-full px-3 py-2">
            @if($testimonial->photo)
                <img src="@photo($testimonial->photo)" alt="Photo" class="h-24 mt-2">
            @endif
            @error('photo')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" value="{{ old('name', $testimonial->name) }}" required>
            @error('name')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Instansi</label>
            <input type="text" name="instansi" class="border rounded w-full px-3 py-2" value="{{ old('instansi', $testimonial->instansi) }}">
            @error('instansi')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Kategori</label>
            <select name="category_id" class="border rounded w-full px-3 py-2" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $testimonial->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Deskripsi</label>
            <textarea name="description" class="border rounded w-full px-3 py-2" rows="4">{{ old('description', $testimonial->description) }}</textarea>
            @error('description')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            <a href="{{ route('admin.testimonials.index') }}" class="px-4 py-2 rounded border border-gray-300 hover:bg-gray-100">Batal</a>
        </div>
    </form>
</div>
@endsection 