@extends('layouts.admin')
@section('admin-title', 'Tambah Kategori')
@section('content')
<div class="max-w-xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-xl font-bold mb-6">Tambah Kategori</h2>
    <form action="{{ route('admin.kategori.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Kategori</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" value="{{ old('name') }}" required>
            @error('name')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Photo Kategori</label>
            <input type="file" name="photo" class="border rounded w-full px-3 py-2">
            @error('photo')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Tambah</button>
        </div>
    </form>
</div>
@endsection 