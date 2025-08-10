@extends('layouts.admin')
@section('admin-title', 'Tambah Testimoni')
@section('content')

<!-- Header Section -->
<div class="mb-8">
    <div class="flex items-center justify-between">
        <a href="{{ route('admin.testimonials.index') }}" 
           class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
            <i class="fa-solid fa-arrow-left mr-2"></i>
            Kembali
        </a>
    </div>
</div>

<!-- Form Container -->
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
        <!-- Form Header -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            <h3 class="text-lg font-semibold text-white flex items-center">
                <i class="fa-solid fa-comments mr-3"></i>
                Form Tambah Testimoni
            </h3>
        </div>

        <!-- Form Content -->
        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf
            
            <!-- Nama -->
            <div class="space-y-2">
                <label for="name" class="block text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-user mr-2 text-blue-600"></i>
                    Nama
                </label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       value="{{ old('name') }}" 
                       required
                       class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                       placeholder="Masukkan nama lengkap...">
                @error('name')
                    <p class="text-sm text-red-600 flex items-center">
                        <i class="fa-solid fa-exclamation-circle mr-1"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Kategori -->
            <div class="space-y-2">
                <label for="category_id" class="block text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-tags mr-2 text-blue-600"></i>
                    Kategori
                </label>
                <select id="category_id" 
                        name="category_id" 
                        required
                        class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-sm text-red-600 flex items-center">
                        <i class="fa-solid fa-exclamation-circle mr-1"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Instansi -->
            <div class="space-y-2">
                <label for="instansi" class="block text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-building mr-2 text-blue-600"></i>
                    Instansi
                </label>
                <input type="text" 
                       id="instansi" 
                       name="instansi" 
                       value="{{ old('instansi') }}" 
                       class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                       placeholder="Masukkan nama instansi/perusahaan...">
                @error('instansi')
                    <p class="text-sm text-red-600 flex items-center">
                        <i class="fa-solid fa-exclamation-circle mr-1"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Isi Testimoni -->
            <div class="space-y-2">
                <label for="description" class="block text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-comment mr-2 text-blue-600"></i>
                    Isi Testimoni
                </label>
                <textarea id="description" 
                          name="description" 
                          rows="6" 
                          required
                          class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 resize-vertical"
                          placeholder="Tulis testimoni di sini...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-sm text-red-600 flex items-center">
                        <i class="fa-solid fa-exclamation-circle mr-1"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Foto -->
            <div class="space-y-2">
                <label for="photo" class="block text-sm font-medium text-gray-700">
                    <i class="fa-solid fa-image mr-2 text-blue-600"></i>
                    Foto
                </label>
                <div class="mt-1">
                    <input id="photo" name="photo" type="file" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                </div>
                <p class="text-xs text-gray-500 mt-1">Format yang didukung: PNG, JPG, GIF. Maksimal 10MB</p>
                @error('photo')
                    <p class="text-sm text-red-600 flex items-center">
                        <i class="fa-solid fa-exclamation-circle mr-1"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.testimonials.index') }}" 
                   class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    <i class="fa-solid fa-times mr-2"></i>
                    Batal
                </a>
                <button type="submit" 
                        class="inline-flex items-center px-6 py-3 border border-transparent rounded-lg text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-105 shadow-lg">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Tambah Testimoni
                </button>
            </div>
        </form>
    </div>
</div>

@endsection 