@extends('layouts.admin')
@section('admin-title', 'Edit Berita')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-xl font-bold mb-6">Edit Berita</h2>
    <form action="{{ route('admin.berita.update', $beritum) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-semibold mb-1">Gambar Berita</label>
            <input type="file" name="gambar" class="border rounded w-full px-3 py-2">
            @if($beritum->photo)
                <img src="@photo($beritum->photo)" alt="Gambar" class="h-24 mt-2">
            @endif
            @error('gambar')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Judul Berita</label>
            <input type="text" name="judul" class="border rounded w-full px-3 py-2" value="{{ old('judul', $beritum->title) }}" required>
            @error('judul')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Bidang Kategori</label>
            <select name="category_id" class="border rounded w-full px-3 py-2" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id', $beritum->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Isi Berita</label>
            <textarea name="isi" class="border rounded w-full px-3 py-2" rows="10">{{ old('isi', $beritum->body) }}</textarea>
            @error('isi')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            <a href="{{ route('admin.berita.index') }}" class="px-4 py-2 rounded border border-gray-300 hover:bg-gray-100">Batal</a>
        </div>
    </form>
</div>
@endsection 