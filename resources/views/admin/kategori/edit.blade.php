@extends('layouts.admin')
@section('admin-title', 'Edit Kategori')
@section('content')
<div class="max-w-xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-xl font-bold mb-6">Edit Kategori</h2>
    <form action="{{ route('admin.kategori.update', $kategori) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Kategori</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" value="{{ old('name', $kategori->name) }}" required>
            @error('name')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Photo Kategori</label>
            <input type="file" name="photo" class="border rounded w-full px-3 py-2">
            @if($kategori->photo)
                <img src="{{ asset('storage/'.$kategori->photo) }}" alt="Photo" class="h-20 mt-2">
            @endif
            @error('photo')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection 