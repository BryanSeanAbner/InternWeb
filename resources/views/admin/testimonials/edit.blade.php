@extends('layouts.admin')
@section('admin-title', 'Edit Testimoni')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-xl font-bold mb-6">Edit Testimoni</h2>
    <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-semibold mb-1">Foto Testimoni</label>
            <input type="file" name="photo" class="border rounded w-full px-3 py-2">
            @if($testimonial->photo)
                <img src="{{ asset('storage/'.$testimonial->photo) }}" alt="Foto" class="h-24 mt-2 rounded">
            @endif
            @error('photo')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama</label>
            <input type="text" name="name" class="border rounded w-full px-3 py-2" value="{{ old('name', $testimonial->name) }}" required>
            @error('name')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Bidang Kategori</label>
            <select name="category_id" class="border rounded w-full px-3 py-2" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id', $testimonial->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Isi Testimoni</label>
            <textarea id="isi-testimoni" name="description" class="border rounded w-full px-3 py-2 min-h-[160px]" required>{{ old('description', $testimonial->description) }}</textarea>
            @error('description')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="text-right">
            <a href="{{ route('admin.testimonials.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 mr-2">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
<script src="https://cdn.tiny.cloud/1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#isi-testimoni',
    height: 250,
    menubar: false,
    plugins: 'lists link image code',
    toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code',
    branding: false
});
</script>
@endsection 