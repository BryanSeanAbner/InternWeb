@extends('layouts.admin')
@section('admin-title', 'Tambah Subkategori')
@section('content')
<div class="max-w-xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Tambah Subkategori untuk {{ $category->name }}</h2>
    <form action="{{ route('admin.subkategori.store', $category->slug) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama Subkategori</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="description" class="border rounded w-full px-3 py-2"></textarea>
        </div>
        <div class="flex justify-end gap-2">
            <a href="{{ route('admin.subkategori.index', $category->slug) }}" class="px-4 py-2 rounded bg-gray-200 text-gray-700">Batal</a>
            <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Simpan</button>
        </div>
    </form> 
</div>
@endsection 