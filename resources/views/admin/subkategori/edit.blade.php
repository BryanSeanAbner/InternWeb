@extends('layouts.admin')
@section('admin-title', 'Edit Subkategori')
@section('content')
<div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg hover:shadow-xl p-4 md:p-8 transition-all duration-300 animate-fade-in-up">
    <div class="mb-6">
        <h2 class="text-xl md:text-2xl font-bold text-gray-800">Edit Subkategori</h2>
        <p class="text-gray-600 mt-2">Untuk kategori: <span class="font-semibold text-blue-600">{{ $category->name }}</span></p>
    </div>
    
    <form action="{{ route('admin.subkategori.update', [$category->slug, $subcategory]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-6">
            <label class="block mb-2 font-semibold text-gray-700">Nama Subkategori</label>
            <input type="text" name="name" value="{{ old('name', $subcategory->name) }}" 
                   class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:shadow-md" 
                   placeholder="Masukkan nama subkategori" required>
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold text-gray-700">Deskripsi</label>
            <textarea id="description" name="description" rows="8" 
                      class="w-full px-3 md:px-4 py-2 md:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:shadow-md" 
                      placeholder="Masukkan deskripsi subkategori">{{ old('description', $subcategory->description) }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col sm:flex-row justify-end gap-3">
            <a href="{{ route('admin.subkategori.index', $category->slug) }}" 
               class="px-4 md:px-6 py-2 md:py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-all duration-200 hover:shadow-md text-center">
                Batal
            </a>
            <button type="submit" 
                    class="px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-200 transform hover:scale-105 shadow-lg">
                Update Subkategori
            </button>
        </div>
    </form>
</div>

<!-- CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script src="{{ asset('js/admin-subkategori.js') }}"></script>
@endsection 