@extends('layouts.admin')
@section('admin-title', 'Edit Kategori')
@section('content')
<div class="max-w-xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Edit Kategori</h2>
    <form action="{{ route('admin.kategori.update', $kategori) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama Kategori</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" value="{{ $kategori->name }}" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="description" class="border rounded w-full px-3 py-2">{{ $kategori->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Foto Kategori</label>
            @if($kategori->photo)
                <div class="mb-2">
                    <img src="@photo($kategori->photo)" alt="Foto saat ini" class="h-32 w-auto">
                </div>
            @endif
            <input type="file" name="photo" class="border rounded w-full px-3 py-2" accept="image/*">
        </div>
        <div class="flex justify-end gap-2">
            <a href="{{ route('admin.kategori.index') }}" class="px-4 py-2 rounded bg-gray-200 text-gray-700">Batal</a>
            <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection 