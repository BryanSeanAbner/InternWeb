@extends('layouts.admin')
@section('admin-title', 'Edit Kategori')
@section('content')

<!-- Header Section -->
<div class="mb-8">
    <h2 class="text-3xl font-bold text-gray-900">Edit Kategori</h2>
    <p class="mt-2 text-gray-600">Perbarui informasi kategori yang sudah ada</p>
</div>

<!-- Form Container -->
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
        <!-- Form Header -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            <h3 class="text-xl font-semibold text-white flex items-center">
                <i class="fa-solid fa-edit mr-3"></i>
                Form Edit Kategori
            </h3>
        </div>

        <!-- Form Content -->
        <form action="{{ route('admin.kategori.update', $kategori) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf
            @method('PUT')
            
            <!-- Nama Kategori -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fa-solid fa-tag mr-2 text-blue-600"></i>
                    Nama Kategori
                </label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       value="{{ old('name', $kategori->name) }}"
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
                          placeholder="Masukkan deskripsi kategori">{{ old('description', $kategori->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tampilkan di Home -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fa-solid fa-home mr-2 text-blue-600"></i>
                    Tampilkan di Home
                </label>
                <div class="flex items-center">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" 
                               name="is_required" 
                               class="sr-only peer"
                               {{ old('is_required', $kategori->is_required) ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900">
                            <span class="text-gray-500">Off</span>
                            <span class="text-blue-600 hidden">On</span>
                        </span>
                    </label>
                    <p class="ml-4 text-sm text-gray-500">
                        Jika diaktifkan, kategori ini akan ditampilkan di halaman home
                    </p>
                </div>
            </div>

            <!-- Foto Kategori -->
            <div>
                <label for="photo" class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fa-solid fa-image mr-2 text-blue-600"></i>
                    Foto Kategori
                </label>
                
                <!-- Current Photo Preview -->
                @if($kategori->photo)
                    <div class="mb-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                        <p class="text-sm font-medium text-gray-700 mb-2">Foto Saat Ini:</p>
                        <div class="relative inline-block">
                            <img src="@photo($kategori->photo)" 
                                 alt="Foto Kategori" 
                                 class="h-32 w-32 object-cover rounded-lg border-2 border-gray-300 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105"
                                 style="aspect-ratio: 1/1;">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent rounded-lg opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                @endif
                
                <input id="photo" 
                       name="photo" 
                       type="file" 
                       accept="image/*" 
                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                <p class="mt-2 text-sm text-gray-500">
                    Format yang didukung: JPG, PNG, GIF. Maksimal 2MB. Biarkan kosong jika tidak ingin mengubah foto.
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
                    Update Kategori
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle switch functionality
    const toggleSwitch = document.querySelector('input[name="is_required"]');
    const offText = toggleSwitch.parentElement.querySelector('.text-gray-500');
    const onText = toggleSwitch.parentElement.querySelector('.text-blue-600');

    function updateToggleText() {
        if (toggleSwitch.checked) {
            offText.classList.add('hidden');
            onText.classList.remove('hidden');
        } else {
            offText.classList.remove('hidden');
            onText.classList.add('hidden');
        }
    }

    toggleSwitch.addEventListener('change', updateToggleText);
    updateToggleText(); // Initial state
});
</script> 