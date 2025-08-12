@extends('layouts.admin')
@section('admin-title', 'Testimoni')
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
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Daftar Testimoni</h2>
        <p class="mt-2 text-gray-600">Kelola semua testimoni yang telah dipublikasikan</p>
    </div>
    <a href="{{ route('admin.testimonials.create') }}" 
       class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 md:px-6 py-2 md:py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
        <i class="fa-solid fa-plus mr-2"></i>
        <span class="hidden sm:inline">Tambah Testimoni</span>
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
                            <i class="fa-solid mr-2"></i>
                            No
                        </div>
                    </th>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-user mr-2"></i>
                            Nama
                        </div>
                    </th>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-tags mr-2"></i>
                            <span class="hidden sm:inline">Kategori</span>
                            <span class="sm:hidden">Kat</span>
                        </div>
                    </th>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-building mr-2"></i>
                            <span class="hidden sm:inline">Instansi</span>
                            <span class="sm:hidden">Inst</span>
                        </div>
                    </th>
                    <th scope="col" class="px-3 md:px-6 py-3 text-left text-xs md:text-sm font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-comment mr-2"></i>
                            <span class="hidden sm:inline">Isi Testimoni</span>
                            <span class="sm:hidden">Testimoni</span>
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
                @forelse($testimonials as $index => $testimonial)
                <tr class="hover:bg-gray-50 transition-all duration-200 animate-fade-in-up" style="animation-delay: {{ 0.2 + ($index * 0.05) }}s;">
                    <td class="px-3 md:px-6 py-4 whitespace-nowrap text-center">
                        <span class="inline-flex items-center justify-center w-6 h-6 md:w-8 md:h-8 text-xs md:text-sm font-semibold bg-blue-100 text-blue-800 rounded-full">
                            {{ $testimonials->firstItem() + $index }}
                        </span>
                    </td>
                    <td class="px-3 md:px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <img src="@photoWithFallback($testimonial->photo, 'testimonials')" 
                                     alt="{{ $testimonial->name }}" 
                                     class="w-8 h-8 md:w-10 md:h-10 rounded-full object-cover">
                            </div>
                            <div class="text-sm md:text-base font-medium text-gray-900 truncate max-w-xs">
                                {{ $testimonial->name }}
                            </div>
                        </div>
                    </td>
                    <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                        @if($testimonial->category)
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs md:text-sm font-medium bg-blue-100 text-blue-800">
                                {{ $testimonial->category->name }}
                            </span>
                        @else
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs md:text-sm font-medium bg-gray-100 text-gray-800">
                                <span class="hidden sm:inline">Tidak ada kategori</span>
                                <span class="sm:hidden">-</span>
                            </span>
                        @endif
                    </td>
                    <td class="px-3 md:px-6 py-4">
                        <div class="text-sm md:text-base text-gray-900 truncate max-w-xs">
                            {{ $testimonial->instansi ?: '-' }}
                        </div>
                    </td>
                    <td class="px-3 md:px-6 py-4">
                        <div class="text-sm md:text-base text-gray-900 line-clamp-2 max-w-xs">
                            {{ Str::limit($testimonial->description, 100) }}
                        </div>
                    </td>
                    <td class="px-3 md:px-6 py-4 whitespace-nowrap text-sm md:text-base font-medium">
                        <div class="flex items-center space-x-2 md:space-x-5">
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" 
                               class="text-indigo-600 hover:text-indigo-900 transition-all duration-200 hover:scale-110">
                                <i class="fa-solid fa-edit mr-1"></i>
                                <span class="hidden sm:inline">Edit</span>
                            </a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-600 hover:text-red-900 transition-all duration-200 hover:scale-110"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">
                                    <i class="fa-solid fa-trash mr-1"></i>
                                    <span class="hidden sm:inline">Hapus</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center">
                        <div class="flex flex-col items-center animate-fade-in-up">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4 shadow-lg">
                                <i class="fa-solid fa-comments text-2xl text-gray-400"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada testimoni</h3>
                            <p class="text-gray-500 mb-4">Mulai dengan menambahkan testimoni pertama Anda</p>
                            <a href="{{ route('admin.testimonials.create') }}" 
                               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 transform hover:scale-105 shadow-lg">
                                <i class="fa-solid fa-plus mr-2"></i>
                                Tambah Testimoni Pertama
                            </a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    @if($testimonials->hasPages())
        <div class="bg-gray-50 px-4 md:px-6 py-4 border-t border-gray-200">
            <div class="flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">
                <div class="text-xs md:text-sm text-gray-700">
                    Menampilkan {{ $testimonials->firstItem() ?? 0 }} sampai {{ $testimonials->lastItem() ?? 0 }} dari {{ $testimonials->total() }} testimoni
                </div>
                <div class="flex items-center space-x-2">
                    <!-- Custom Pagination -->
                    <div class="flex items-center space-x-1">
                        {{-- Previous Page --}}
                        @if ($testimonials->onFirstPage())
                            <span class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed">
                                <i class="fa-solid fa-chevron-left"></i>
                            </span>
                        @else
                            <a href="{{ $testimonials->previousPageUrl() }}" class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        @endif

                        {{-- Page Numbers --}}
                        @php
                            $start = max(1, $testimonials->currentPage() - 2);
                            $end = min($testimonials->lastPage(), $testimonials->currentPage() + 2);
                        @endphp
                        
                        @if($start > 1)
                            <a href="{{ $testimonials->url(1) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                1
                            </a>
                            @if($start > 2)
                                <span class="px-2 py-2 text-xs md:text-sm text-gray-500">...</span>
                            @endif
                        @endif
                        
                        @for ($page = $start; $page <= $end; $page++)
                            @if ($page == $testimonials->currentPage())
                                <span class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 border border-blue-600 rounded-lg shadow-lg">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $testimonials->url($page) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                    {{ $page }}
                                </a>
                            @endif
                        @endfor
                        
                        @if($end < $testimonials->lastPage())
                            @if($end < $testimonials->lastPage() - 1)
                                <span class="px-2 py-2 text-xs md:text-sm text-gray-500">...</span>
                            @endif
                            <a href="{{ $testimonials->url($testimonials->lastPage()) }}" class="px-3 md:px-4 py-2 text-xs md:text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
                                {{ $testimonials->lastPage() }}
                            </a>
                        @endif

                        {{-- Next Page --}}
                        @if ($testimonials->hasMorePages())
                            <a href="{{ $testimonials->nextPageUrl() }}" class="px-2 md:px-3 py-2 text-xs md:text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition-all duration-200 hover:shadow-md">
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

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

@endsection 