@extends('layouts.admin')
@section('admin-title', 'Kategori')
@section('content')

<!-- Alert Messages -->
@if(session('success'))
    <div class="mb-6 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4 shadow-lg animate-fade-in-up">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <i class="fa-solid fa-check-circle text-green-500 text-xl"></i>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
            </div>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="mb-6 bg-gradient-to-r from-red-50 to-pink-50 border border-red-200 rounded-xl p-4 shadow-lg animate-fade-in-up">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <i class="fa-solid fa-exclamation-triangle text-red-500 text-xl"></i>
            </div>
            <div class="ml-3">
                <p class="text-sm font-medium text-red-800">{{ session('error') }}</p>
            </div>
        </div>
    </div>
@endif

<!-- Header Section -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 md:mb-8 space-y-4 sm:space-y-0 animate-slide-in-left">
    <div>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Daftar Kategori</h2>
        <p class="mt-2 text-gray-600">Kelola semua kategori yang telah dibuat</p>
    </div>
    <a href="{{ route('admin.kategori.create') }}" 
       class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 md:px-6 py-2 md:py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
        <i class="fa-solid fa-plus mr-2"></i>
        <span class="hidden sm:inline">Tambah Kategori</span>
        <span class="sm:hidden">Tambah</span>
    </a>
</div>

<!-- Categories Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6">
    @forelse($categories as $index => $category)
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl border border-gray-200 overflow-hidden transition-all duration-300 transform hover:-translate-y-1 animate-fade-in-up" style="animation-delay: {{ 0.1 + ($index * 0.05) }}s;">
        <!-- Category Photo -->
        <div class="h-40 md:h-48 bg-gray-100 overflow-hidden relative">
            @if($category->photo)
                <img src="@photo($category->photo)" 
                     alt="{{ $category->name }}" 
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                     style="aspect-ratio: 16/9;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
            @else
                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-500 to-purple-600">
                    <div class="text-center text-white">
                        <i class="fa-solid fa-image text-3xl md:text-4xl mb-2 opacity-80"></i>
                        <p class="text-xs md:text-sm font-semibold">No Image</p>
                    </div>
                </div>
            @endif
        </div>
        
        <!-- Category Content -->
        <div class="p-4 md:p-6">
            <div class="mb-4">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2">
                    <a href="{{ route('admin.subkategori.index', $category->slug) }}" 
                       class="text-blue-700 hover:text-blue-800 hover:underline transition-colors duration-200">
                        {{ $category->name }}
                    </a>    
                </h3>
                <p class="text-xs md:text-sm text-gray-600 leading-relaxed line-clamp-2">
                    {{ Str::limit($category->description ?: 'Tidak ada deskripsi', 80) }}
                </p>
                <div class="flex items-center mt-2">
                    @if($category->is_required)
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fa-solid fa-home mr-1"></i>
                            <span class="hidden sm:inline">Ditampilkan di Home</span>
                            <span class="sm:hidden">Home</span>
                        </span>
                    @else
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                            <i class="fa-solid fa-list mr-1"></i>
                            <span class="hidden sm:inline">Hanya di Daftar Kategori</span>
                            <span class="sm:hidden">List</span>
                        </span>
                    @endif
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                <div class="flex items-center space-x-2">
                    <a href="{{ route('admin.subkategori.index', $category->slug) }}" 
                       class="inline-flex items-center px-2 md:px-3 py-1 md:py-1.5 text-xs font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-all duration-200 hover:scale-105">
                        <i class="fa-solid fa-folder mr-1"></i>
                        <span class="hidden sm:inline">Subkategori</span>
                        <span class="sm:hidden">Sub</span>
                        @if($category->subcategories_count > 0)
                        <span class="ml-1 md:ml-2 bg-red-500 text-white text-xs font-bold rounded-full w-4 h-4 md:w-5 md:h-5 flex items-center justify-center shadow-lg">
                            {{ $category->subcategories_count }}
                        </span>
                        @endif
                    </a>
                </div>
                <div class="flex items-center space-x-2">
                    <a href="{{ route('admin.kategori.edit', $category) }}" 
                       class="text-indigo-600 hover:text-indigo-800 transition-all duration-200 hover:scale-110"
                       title="Edit Kategori">
                        <i class="fa-solid fa-edit text-lg"></i>
                    </a>
                    <form action="{{ route('admin.kategori.destroy', $category) }}" 
                          method="POST" 
                          class="inline"
                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="text-red-600 hover:text-red-800 transition-all duration-200 hover:scale-110"
                                title="Hapus Kategori">
                            <i class="fa-solid fa-trash text-lg"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-span-full">
        <div class="bg-white rounded-xl shadow-lg hover:shadow-xl border border-gray-200 p-8 md:p-12 text-center animate-fade-in-up">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                <i class="fa-solid fa-tags text-2xl text-gray-400"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada kategori</h3>
            <p class="text-gray-500 mb-6">Mulai dengan menambahkan kategori pertama Anda</p>
            <a href="{{ route('admin.kategori.create') }}" 
               class="inline-flex items-center px-4 md:px-6 py-2 md:py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 transform hover:scale-105 shadow-lg">
                <i class="fa-solid fa-plus mr-2"></i>
                Tambah Kategori Pertama
            </a>
        </div>
    </div>
    @endforelse
</div>

<!-- Pagination -->
@if($categories->hasPages())
    <div class="mt-6 md:mt-8 bg-white rounded-xl shadow-lg hover:shadow-xl border border-gray-200 px-4 md:px-6 py-4 transition-all duration-300">
        <div class="flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">
            <div class="text-xs md:text-sm text-gray-700">
                Menampilkan {{ $categories->firstItem() ?? 0 }} sampai {{ $categories->lastItem() ?? 0 }} dari {{ $categories->total() }} kategori
            </div>
            <div class="flex items-center space-x-2">
                <!-- Custom Pagination -->
                <div class="flex items-center space-x-1">
                    {{-- Previous Page --}}
                    @if ($categories->onFirstPage())
                        <span class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed">
                            <i class="fa-solid fa-chevron-left"></i>
                        </span>
                    @else
                        <a href="{{ $categories->previousPageUrl() }}" class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @php
                        $start = max(1, $categories->currentPage() - 2);
                        $end = min($categories->lastPage(), $categories->currentPage() + 2);
                    @endphp
                    
                    @if($start > 1)
                        <a href="{{ $categories->url(1) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                            1
                        </a>
                        @if($start > 2)
                            <span class="px-2 py-2 text-xs md:text-sm text-gray-500">...</span>
                        @endif
                    @endif
                    
                    @for ($page = $start; $page <= $end; $page++)
                        @if ($page == $categories->currentPage())
                            <span class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 border border-blue-600 rounded-lg shadow-lg">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $categories->url($page) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                {{ $page }}
                            </a>
                        @endif
                    @endfor
                    
                    @if($end < $categories->lastPage())
                        @if($end < $categories->lastPage() - 1)
                            <span class="px-2 py-2 text-xs md:text-sm text-gray-500">...</span>
                        @endif
                        <a href="{{ $categories->url($categories->lastPage()) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                            {{ $categories->lastPage() }}
                        </a>
                    @endif

                    {{-- Next Page --}}
                    @if ($categories->hasMorePages())
                        <a href="{{ $categories->nextPageUrl() }}" class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    @else
                        <span class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

@endsection 