@extends('layouts.admin')
@section('admin-title', 'Edit Testimoni')

@section('content')
<div class="container mx-auto py-6">
    <h2 class="text-2xl font-bold mb-4">Edit Testimoni</h2>
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" value="{{ old('name', $testimonial->name) }}" required>
            @error('name')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Kategori</label>
            <select name="category_id" class="border rounded w-full px-3 py-2" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id', $testimonial->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Instansi</label>
            <input type="text" name="instansi" class="border rounded w-full px-3 py-2" value="{{ old('instansi', $testimonial->instansi) }}" placeholder="Masukkan nama instansi/perusahaan">
            @error('instansi')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Isi Testimoni</label>
            <textarea name="description" class="border rounded w-full px-3 py-2" rows="4" required>{{ old('description', $testimonial->description) }}</textarea>
            @error('description')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Foto</label>
            @if($testimonial->photo)
                <img src="{{ asset('storage/'.$testimonial->photo) }}" alt="Foto" class="h-16 mb-2 rounded">
            @endif
            <input type="file" name="photo" class="border rounded w-full px-3 py-2">
            @error('photo')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('admin.testimonials.index') }}" class="ml-2 text-gray-600">Batal</a>
    </form>
</div>
@endsection 