@extends('layouts.admin')
@section('admin-title', 'Tambah Kategori')
@section('content')

<!-- Header Section -->
<div class="mb-8">
    <h2 class="text-3xl font-bold text-gray-900">Tambah Kategori Baru</h2>
    <p class="mt-2 text-gray-600">Buat kategori baru untuk mengelompokkan konten</p>
</div>

<!-- Form Container -->
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
        <!-- Form Header -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            <h3 class="text-xl font-semibold text-white flex items-center">
                <i class="fa-solid fa-tags mr-3"></i>
                Form Tambah Kategori
            </h3>
        </div>

        <!-- Form Content -->
        <form action="{{ route('admin.kategori.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf
            
            <!-- Nama Kategori -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fa-solid fa-tag mr-2 text-blue-600"></i>
                    Nama Kategori
                </label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       value="{{ old('name') }}"
                       class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                       placeholder="Masukkan nama kategori"
                       required>
                @error('name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fa-solid fa-align-left mr-2 text-blue-600"></i>
                    Deskripsi
                </label>
                <textarea id="description" 
                          name="description" 
                          rows="4"
                          class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                          placeholder="Masukkan deskripsi kategori">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Foto Kategori -->
            <div>
                <label for="photo" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fa-solid fa-image mr-2 text-blue-600"></i>
                    Foto Kategori
                </label>
                
                <!-- Photo Preview -->
                <div id="photo-preview" class="mb-4 p-4 bg-gray-50 rounded-lg border border-gray-200 hidden">
                    <p class="text-sm font-medium text-gray-700 mb-2">Preview Foto:</p>
                    <div class="relative inline-block">
                        <img id="preview-image" 
                             alt="Preview Foto" 
                             class="h-32 w-32 object-cover rounded-lg border-2 border-gray-300 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105"
                             style="aspect-ratio: 1/1;">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent rounded-lg opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>
                
                <input id="photo" 
                       name="photo" 
                       type="file" 
                       accept="image/*" 
                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                <p class="mt-2 text-sm text-gray-500">
                    Format yang didukung: JPG, PNG, GIF. Maksimal 2MB.
                </p>
                @error('photo')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.kategori.index') }}" 
                   class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    <i class="fa-solid fa-times mr-2"></i>
                    Batal
                </a>
                <button type="submit" 
                        class="inline-flex items-center px-6 py-3 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-105 shadow-lg">
                    <i class="fa-solid fa-save mr-2"></i>
                    Simpan Kategori
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    const photoInput = document.getElementById('photo');
    const photoPreview = document.getElementById('photo-preview');
    const previewImage = document.getElementById('preview-image');
    
    photoInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                photoPreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            photoPreview.classList.add('hidden');
        }
    });
});
</script> 