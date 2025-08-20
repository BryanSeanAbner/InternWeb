@extends('layouts.admin')
@section('admin-title', 'Subkategori')
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
        <div class="flex items-center mb-2">
            <a href="{{ route('admin.kategori.index') }}" 
               class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-all duration-200 mr-4 hover:scale-105">
                <i class="fa-solid fa-arrow-left mr-2"></i>
                <span class="hidden sm:inline">Kembali ke Kategori</span>
                <span class="sm:hidden">Kembali</span>
            </a>
        </div>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Daftar Subkategori dari {{ $category->name }}</h2>
        <p class="mt-2 text-gray-600">Kelola semua subkategori dalam kategori ini</p>
    </div>
    <a href="{{ route('admin.subkategori.create', $category->slug) }}" 
       class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 md:px-6 py-2 md:py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
        <i class="fa-solid fa-plus mr-2"></i>
        <span class="hidden sm:inline">Tambah Subkategori</span>
        <span class="sm:hidden">Tambah</span>
    </a>
</div>

<!-- Table Container -->
<div class="bg-white rounded-xl shadow-lg hover:shadow-xl border border-gray-200 overflow-hidden transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.1s;">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gradient-to-r from-blue-600 to-blue-700">
                <tr>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-hashtag mr-2"></i>
                            No
                        </div>
                    </th>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-tag mr-2"></i>
                            <span class="hidden sm:inline">Nama Subkategori</span>
                            <span class="sm:hidden">Nama</span>
                        </div>
                    </th>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-align-left mr-2"></i>
                            <span class="hidden sm:inline">Deskripsi</span>
                            <span class="sm:hidden">Desk</span>
                        </div>
                    </th>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-calendar mr-2"></i>
                            <span class="hidden sm:inline">Tanggal Dibuat</span>
                            <span class="sm:hidden">Tgl</span>
                        </div>
                    </th>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-cogs mr-2"></i>
                            Aksi
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($subcategories as $index => $sub)
                <tr class="hover:bg-gray-50 transition-all duration-200 animate-fade-in-up" style="animation-delay: {{ 0.2 + ($index * 0.05) }}s;">
                    <td class="px-3 md:px-6 py-4 whitespace-nowrap text-center">
                        <span class="inline-flex items-center justify-center w-6 h-6 md:w-8 md:h-8 text-xs md:text-sm font-semibold bg-blue-100 text-blue-800 rounded-full">
                            {{ $subcategories->firstItem() + $index }}
                        </span>
                    </td>
                    <td class="px-3 md:px-6 py-4">
                        <div class="text-sm md:text-base font-medium text-gray-900 truncate max-w-xs md:max-w-md" title="{{ $sub->name }}">
                            {{ $sub->name }}
                        </div>
                    </td>
                    <td class="px-3 md:px-6 py-4">
                        <div class="text-xs md:text-sm text-gray-900 max-w-xs md:max-w-md line-clamp-2 prose prose-sm">
                            {!! $sub->description ?: 'Tidak ada deskripsi' !!}
                        </div>
                    </td>
                    <td class="px-3 md:px-6 py-4 whitespace-nowrap text-xs md:text-sm text-gray-900">
                        {{ $sub->created_at->format('d M Y') }}
                    </td>
                    <td class="px-3 md:px-6 py-4 whitespace-nowrap text-xs md:text-sm font-medium">
                        <div class="flex items-center space-x-2 md:space-x-5">
                            <a href="{{ route('admin.subkategori.edit', [$category->slug, $sub]) }}" 
                               class="text-indigo-600 hover:text-indigo-900 transition-all duration-200 hover:scale-110">
                                <i class="fa-solid fa-edit mr-1"></i>
                                <span class="hidden sm:inline">Edit</span>
                            </a>
                            <form action="{{ route('admin.subkategori.destroy', [$category->slug, $sub]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-600 hover:text-red-900 transition-all duration-200 hover:scale-110"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus subkategori ini?')">
                                    <i class="fa-solid fa-trash mr-1"></i>
                                    <span class="hidden sm:inline">Hapus</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center">
                        <div class="flex flex-col items-center animate-fade-in-up">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4 shadow-lg">
                                <i class="fa-solid fa-tags text-2xl text-gray-400"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada subkategori</h3>
                            <p class="text-gray-500 mb-4">Mulai dengan menambahkan subkategori pertama untuk kategori ini</p>
                            <a href="{{ route('admin.subkategori.create', $category->slug) }}" 
                               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 transform hover:scale-105 shadow-lg">
                                <i class="fa-solid fa-plus mr-2"></i>
                                Tambah Subkategori Pertama
                            </a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    @if($subcategories->hasPages())
        <div class="bg-gray-50 px-4 md:px-6 py-4 border-t border-gray-200">
            <div class="flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">
                <div class="text-xs md:text-sm text-gray-700">
                    Menampilkan {{ $subcategories->firstItem() ?? 0 }} sampai {{ $subcategories->lastItem() ?? 0 }} dari {{ $subcategories->total() }} subkategori
                </div>
                <div class="flex items-center space-x-2">
                    <!-- Custom Pagination -->
                    <div class="flex items-center space-x-1">
                        {{-- Previous Page --}}
                        @if ($subcategories->onFirstPage())
                            <span class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed">
                                <i class="fa-solid fa-chevron-left"></i>
                            </span>
                        @else
                            <a href="{{ $subcategories->previousPageUrl() }}" class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        @endif

                        {{-- Page Numbers --}}
                        @php
                            $start = max(1, $subcategories->currentPage() - 2);
                            $end = min($subcategories->lastPage(), $subcategories->currentPage() + 2);
                        @endphp
                        
                        @if($start > 1)
                            <a href="{{ $subcategories->url(1) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                1
                            </a>
                            @if($start > 2)
                                <span class="px-2 py-2 text-xs md:text-sm text-gray-500">...</span>
                            @endif
                        @endif
                        
                        @for ($page = $start; $page <= $end; $page++)
                            @if ($page == $subcategories->currentPage())
                                <span class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 border border-blue-600 rounded-lg shadow-lg">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $subcategories->url($page) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                    {{ $page }}
                                </a>
                            @endif
                        @endfor
                        
                        @if($end < $subcategories->lastPage())
                            @if($end < $subcategories->lastPage() - 1)
                                <span class="px-2 py-2 text-xs md:text-sm text-gray-500">...</span>
                            @endif
                            <a href="{{ $subcategories->url($subcategories->lastPage()) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                {{ $subcategories->lastPage() }}
                            </a>
                        @endif

                        {{-- Next Page --}}
                        @if ($subcategories->hasMorePages())
                            <a href="{{ $subcategories->nextPageUrl() }}" class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
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
</div>

<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">

@endsection 