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
<!-- Include Quill.js -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<style>
.ql-editor {
    min-height: 200px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    font-size: 14px;
    line-height: 1.6;
}

.ql-toolbar {
    border-top: 1px solid #e2e8f0;
    border-left: 1px solid #e2e8f0;
    border-right: 1px solid #e2e8f0;
    border-radius: 6px 6px 0 0;
    background: #f8fafc;
}

.ql-container {
    border-bottom: 1px solid #e2e8f0;
    border-left: 1px solid #e2e8f0;
    border-right: 1px solid #e2e8f0;
    border-radius: 0 0 6px 6px;
    background: white;
}

.ql-editor:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing Quill...');
    
    // Check if Quill is loaded
    if (typeof Quill === 'undefined') {
        console.error('Quill is not loaded!');
        return;
    }
    
    // Check if element exists
    var editorElement = document.querySelector('#isi-berita');
    if (!editorElement) {
        console.error('Editor element not found!');
        return;
    }
    
    try {
        // Initialize Quill
        var quill = new Quill('#isi-berita', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'font': [] }],
                    [{ 'size': ['small', false, 'large', 'huge'] }],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'indent': '-1'}, { 'indent': '+1' }],
                    [{ 'direction': 'rtl' }],
                    [{ 'align': [] }],
                    ['link', 'image', 'video'],
                    ['clean']
                ]
            },
            placeholder: 'Tulis isi berita di sini...'
        });
        
        console.log('Quill initialized successfully!');
        
        // Update hidden textarea before form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            console.log('Form submitted, updating textarea...');
            var content = quill.root.innerHTML;
            document.querySelector('#isi-berita').value = content;
            console.log('Content updated:', content);
        });

        // Set initial content if editing
        @if(old('isi', $post->body))
            quill.root.innerHTML = `{!! old('isi', $post->body) !!}`;
            console.log('Old content loaded');
        @endif
        
        // Test toolbar functionality
        setTimeout(function() {
            console.log('Quill instance:', quill);
            console.log('Toolbar elements:', document.querySelectorAll('.ql-toolbar button'));
        }, 1000);
        
    } catch (error) {
        console.error('Error initializing Quill:', error);
    }
});
</script>
@endsection 