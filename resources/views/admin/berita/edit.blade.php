@extends('layouts.admin')
@section('admin-title', 'Edit Berita')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded shadow p-8">
    <h2 class="text-xl font-bold mb-6">Edit Berita</h2>
    <form action="{{ route('admin.berita.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-semibold mb-1">Gambar Berita</label>
            <input type="file" name="gambar" class="border rounded w-full px-3 py-2">
            @if($post->photo)
                <img src="{{ asset('storage/'.$post->photo) }}" alt="Gambar" class="h-24 mt-2">
            @endif
            @error('gambar')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Judul Berita</label>
            <input type="text" name="judul" class="border rounded w-full px-3 py-2" value="{{ old('judul', $post->title) }}" required>
            @error('judul')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Bidang Kategori</label>
            <select name="category_id" class="border rounded w-full px-3 py-2" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id', $post->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
            @error('category_id')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block font-semibold mb-1">Isi Berita</label>
            <textarea id="isi-berita" name="isi" class="border rounded w-full px-3 py-2 min-h-[160px]" required>{{ old('isi', $post->body) }}</textarea>
            @error('isi')<div class="text-red-500 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="text-right">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
<script src="https://cdn.tiny.cloud/1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#isi-berita',
    height: 400,
    menubar: true,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor backcolor | removeformat | help',
    content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; }',
    branding: false,
    language: 'id',
    paste_data_images: true,
    images_upload_url: '{{ route("admin.berita.store") }}',
    automatic_uploads: true,
    file_picker_types: 'image',
    relative_urls: false,
    remove_script_host: false,
    convert_urls: true
});
</script>
@endsection 