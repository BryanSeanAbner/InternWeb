@extends('layouts.admin')
@section('admin-title', 'Edit Kategori')
@section('content')
<div class="max-w-lg mx-auto bg-white rounded shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Edit Kategori</h2>
    <form action="{{ route('admin.kategori.update', $kategori) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama Kategori</label>
            <input type="text" name="name" value="{{ old('name', $kategori->name) }}" class="w-full border rounded px-3 py-2" required>
            @error('name')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="description" class="w-full border rounded px-3 py-2" rows="3">{{ old('description', $kategori->description) }}</textarea>
            @error('description')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Photo Kategori</label>
            @if($kategori->photo)
                <img src="{{ asset('storage/' . $kategori->photo) }}" alt="Photo" class="mb-2 w-32 h-32 object-cover rounded">
            @endif
            <input type="file" name="photo" class="w-full border rounded px-3 py-2">
            @error('photo')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            <a href="{{ route('admin.kategori.index') }}" class="px-4 py-2 rounded border border-gray-300 hover:bg-gray-100">Batal</a>
        </div>
    </form>
</div>
@endsection 