@extends('layouts.admin')
@section('admin-title', 'Kategori')
@section('content')

<!-- Alert Messages -->
@if(session('success'))
    <div class="mb-6 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4 shadow-sm">
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
    <div class="mb-6 bg-gradient-to-r from-red-50 to-pink-50 border border-red-200 rounded-xl p-4 shadow-sm">
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
<div class="flex justify-between items-center mb-8">
    <div>
        <h2 class="text-3xl font-bold text-gray-900">Daftar Kategori</h2>
        <p class="mt-2 text-gray-600">Kelola semua kategori yang telah dibuat</p>
    </div>
    <a href="{{ route('admin.kategori.create') }}" 
       class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105 shadow-lg">
        <i class="fa-solid fa-plus mr-2"></i>
        Tambah Kategori
    </a>
</div>

<!-- Categories Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @forelse($categories as $category)
    <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden hover:shadow-xl transition-shadow duration-300">
        <!-- Category Photo -->
        <div class="h-48 bg-gray-100 overflow-hidden relative">
            @if($category->photo)
                <img src="@photo($category->photo)" 
                     alt="{{ $category->name }}" 
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                     style="aspect-ratio: 16/9;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
            @else
                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-blue-500 to-purple-600">
                    <div class="text-center text-white">
                        <i class="fa-solid fa-image text-4xl mb-2 opacity-80"></i>
                        <p class="text-sm font-semibold">No Image</p>
                    </div>
                </div>
            @endif
        </div>
        
        <!-- Category Content -->
        <div class="p-6">
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    <a href="{{ route('admin.subkategori.index', $category->slug) }}" 
                       class="text-blue-700 hover:text-blue-800 hover:underline transition-colors duration-200">
                        {{ $category->name }}
                    </a>
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed">
                    {{ Str::limit($category->description ?: 'Tidak ada deskripsi', 80) }}
                </p>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                <div class="flex items-center space-x-2">
                    <a href="{{ route('admin.subkategori.index', $category->slug) }}" 
                       class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                        <i class="fa-solid fa-folder mr-1"></i>
                        Subkategori
                    </a>
                </div>
                <div class="flex items-center space-x-2">
                    <a href="{{ route('admin.kategori.edit', $category) }}" 
                       class="text-indigo-600 hover:text-indigo-800 transition-colors duration-200"
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
                                class="text-red-600 hover:text-red-800 transition-colors duration-200"
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
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-12 text-center">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fa-solid fa-tags text-2xl text-gray-400"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada kategori</h3>
            <p class="text-gray-500 mb-6">Mulai dengan menambahkan kategori pertama Anda</p>
            <a href="{{ route('admin.kategori.create') }}" 
               class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors duration-200">
                <i class="fa-solid fa-plus mr-2"></i>
                Tambah Kategori Pertama
            </a>
        </div>
    </div>
    @endforelse
</div>

<!-- Pagination -->
@if($categories->hasPages())
    <div class="mt-8 bg-white rounded-lg shadow-lg border border-gray-200 px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="text-sm text-gray-700">
                Menampilkan {{ $categories->firstItem() ?? 0 }} sampai {{ $categories->lastItem() ?? 0 }} dari {{ $categories->total() }} kategori
            </div>
            <div class="flex items-center space-x-2">
                <!-- Custom Pagination -->
                <div class="flex items-center space-x-1">
                    {{-- Previous Page --}}
                    @if ($categories->onFirstPage())
                        <span class="px-3 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed">
                            <i class="fa-solid fa-chevron-left"></i>
                        </span>
                    @else
                        <a href="{{ $categories->previousPageUrl() }}" class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                    @endif

                    {{-- Page Numbers --}}
                    @php
                        $start = max(1, $categories->currentPage() - 2);
                        $end = min($categories->lastPage(), $categories->currentPage() + 2);
                    @endphp
                    
                    @if($start > 1)
                        <a href="{{ $categories->url(1) }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                            1
                        </a>
                        @if($start > 2)
                            <span class="px-2 py-2 text-sm text-gray-500">...</span>
                        @endif
                    @endif
                    
                    @for ($page = $start; $page <= $end; $page++)
                        @if ($page == $categories->currentPage())
                            <span class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 border border-blue-600 rounded-lg shadow-lg">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $categories->url($page) }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                                {{ $page }}
                            </a>
                        @endif
                    @endfor
                    
                    @if($end < $categories->lastPage())
                        @if($end < $categories->lastPage() - 1)
                            <span class="px-2 py-2 text-sm text-gray-500">...</span>
                        @endif
                        <a href="{{ $categories->url($categories->lastPage()) }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                            {{ $categories->lastPage() }}
                        </a>
                    @endif

                    {{-- Next Page --}}
                    @if ($categories->hasMorePages())
                        <a href="{{ $categories->nextPageUrl() }}" class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    @else
                        <span class="px-3 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif

@endsection 