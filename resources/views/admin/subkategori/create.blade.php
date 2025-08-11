@extends('layouts.admin')
@section('admin-title', 'Tambah Subkategori')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Tambah Subkategori</h2>
        <p class="text-gray-600 mt-2">Untuk kategori: <span class="font-semibold text-blue-600">{{ $category->name }}</span></p>
    </div>
    
    <form action="{{ route('admin.subkategori.store', $category->slug) }}" method="POST">
        @csrf
        
        <div class="mb-6">
            <label class="block mb-2 font-semibold text-gray-700">Nama Subkategori</label>
            <input type="text" name="name" value="{{ old('name') }}" 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" 
                   placeholder="Masukkan nama subkategori" required>
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold text-gray-700">Deskripsi</label>
            <textarea id="description" name="description" rows="8" 
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" 
                      placeholder="Masukkan deskripsi subkategori">{{ old('description') }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.subkategori.index', $category->slug) }}" 
               class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors duration-200">
                Batal
            </a>
            <button type="submit" 
                    class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200">
                Simpan Subkategori
            </button>
        </div>
    </form>
</div>

<!-- CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'bold', 'italic', 'underline', 'strikethrough',
                    '|', 'link',
                    '|', 'bulletedList', 'numberedList',
                    '|', 'indent', 'outdent',
                    '|', 'alignment',
                    '|', 'removeFormat'
                ]
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            language: 'id',
            placeholder: 'Masukkan deskripsi subkategori...',
            removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption', 'ImageStyle', 'ImageToolbar', 'ImageUpload'],
            // Mengurangi auto-detection yang terlalu agresif
            autoformat: {
                list: false
            },
            // Custom styling untuk list
            contentStyle: `
                .ck-editor__editable ol {
                    @apply pl-16 ml-0;
                    list-style-position: inside !important;
                }
                .ck-editor__editable ol li {
                    @apply mb-2 pl-0;
                    list-style-type: decimal !important;
                    list-style-position: inside !important;
                }
                .ck-editor__editable ul {
                    @apply pl-16 ml-0;
                    list-style-position: inside !important;
                }
                .ck-editor__editable ul li {
                    @apply mb-2 pl-0;
                    list-style-type: disc !important;
                    list-style-position: inside !important;
                }
                .ck-editor__editable {
                    @apply p-4;
                }
            `
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection 