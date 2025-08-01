@extends('layouts.admin')
@section('admin-title', 'Edit Subkategori')
@section('content')
<div class="max-w-xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Edit Subkategori untuk {{ $category->name }}</h2>
    <form action="{{ route('admin.subkategori.update', [$category->slug, $subcategory]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama Subkategori</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" value="{{ $subcategory->name }}" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Deskripsi</label>
            <textarea name="description" class="border rounded w-full px-3 py-2">{{ $subcategory->description }}</textarea>
        </div>
        <div class="flex justify-end gap-2">
            <a href="{{ route('admin.subkategori.index', $category->slug) }}" class="px-4 py-2 rounded bg-gray-200 text-gray-700">Batal</a>
            <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection 