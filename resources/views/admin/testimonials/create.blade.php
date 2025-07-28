@extends('layouts.admin')
@section('admin-title', 'Tambah Testimoni')

@section('content')
<div class="container mx-auto py-6">
    <h2 class="text-2xl font-bold mb-4">Tambah Testimoni</h2>
    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" value="{{ old('name') }}" required>
            @error('name')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Kategori</label>
            <select name="category_id" class="border rounded w-full px-3 py-2" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Instansi</label>
            <input type="text" name="instansi" class="border rounded w-full px-3 py-2" value="{{ old('instansi') }}" placeholder="Masukkan nama instansi/perusahaan">
            @error('instansi')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Isi Testimoni</label>
            <textarea name="description" class="border rounded w-full px-3 py-2" rows="4" required>{{ old('description') }}</textarea>
            @error('description')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Foto</label>
            <input type="file" name="photo" class="border rounded w-full px-3 py-2">
            @error('photo')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('admin.testimonials.index') }}" class="ml-2 text-gray-600">Batal</a>
    </form>
</div>
@endsection 