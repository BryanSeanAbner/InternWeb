@extends('layouts.admin')
@section('admin-title', 'Berita')
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
        <h2 class="text-3xl font-bold text-gray-900">Daftar Berita</h2>
        <p class="mt-2 text-gray-600">Kelola semua berita yang telah dipublikasikan</p>
    </div>
    <a href="{{ route('admin.berita.create') }}" 
       class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105 shadow-lg">
        <i class="fa-solid fa-plus mr-2"></i>
        Tambah Berita
    </a>
</div>

<!-- Table Container -->
<div class="bg-white rounded-lg shadow-lg border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-600">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-base1 font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid mr-2"></i>
                            No
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-base1 font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-newspaper mr-2"></i>
                            Judul Berita
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-base1 font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-tags mr-2"></i>
                            Kategori
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-base1 font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-calendar mr-2"></i>
                            Tanggal
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-base1 font-medium text-white uppercase tracking-wider">
                        <div class="flex items-center">
                            <i class="fa-solid fa-cogs mr-2"></i>
                            Aksi
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($posts as $index => $post)
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        <span class="inline-flex items-center justify-center w-8 h-8 text-sm font-semibold">
                            {{ $posts->firstItem() + $index }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-base font-medium text-gray-900 truncate max-w-md" title="{{ $post->title }}">
                            {{ $post->title }}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($post->category)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-base font-medium bg-blue-100">
                                {{ $post->category->name }}
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-base font-medium bg-gray-100 text-gray-800">
                                Tidak ada kategori
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-base">
                        {{ $post->created_at->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-base font-medium">
                        <div class="flex items-center space-x-5">
                            <a href="{{ route('admin.berita.edit', $post) }}" 
                               class="text-indigo-600 hover:text-indigo-900 transition-colors duration-200">
                                <i class="fa-solid fa-edit mr-1"></i>
                                Edit
                            </a>
                            <form action="{{ route('admin.berita.destroy', $post) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-600 hover:text-red-900 transition-colors duration-200"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                    <i class="fa-solid fa-trash mr-1"></i>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fa-solid fa-newspaper text-2xl text-gray-400"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada berita</h3>
                            <p class="text-gray-500 mb-4">Mulai dengan menambahkan berita pertama Anda</p>
                            <a href="{{ route('admin.berita.create') }}" 
                               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <i class="fa-solid fa-plus mr-2"></i>
                                Tambah Berita Pertama
                            </a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    @if($posts->hasPages())
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-700">
                    Menampilkan {{ $posts->firstItem() ?? 0 }} sampai {{ $posts->lastItem() ?? 0 }} dari {{ $posts->total() }} berita
                </div>
                <div class="flex items-center space-x-2">
                    <!-- Custom Pagination -->
                    <div class="flex items-center space-x-1">
                        {{-- Previous Page --}}
                        @if ($posts->onFirstPage())
                            <span class="px-3 py-2 text-sm font-medium text-gray-400 bg-gray-100 border border-gray-200 rounded-lg cursor-not-allowed">
                                <i class="fa-solid fa-chevron-left"></i>
                            </span>
                        @else
                            <a href="{{ $posts->previousPageUrl() }}" class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        @endif

                        {{-- Page Numbers --}}
                        @php
                            $start = max(1, $posts->currentPage() - 2);
                            $end = min($posts->lastPage(), $posts->currentPage() + 2);
                        @endphp
                        
                        @if($start > 1)
                            <a href="{{ $posts->url(1) }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                                1
                            </a>
                            @if($start > 2)
                                <span class="px-2 py-2 text-sm text-gray-500">...</span>
                            @endif
                        @endif
                        
                        @for ($page = $start; $page <= $end; $page++)
                            @if ($page == $posts->currentPage())
                                <span class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 border border-blue-600 rounded-lg shadow-lg">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $posts->url($page) }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                                    {{ $page }}
                                </a>
                            @endif
                        @endfor
                        
                        @if($end < $posts->lastPage())
                            @if($end < $posts->lastPage() - 1)
                                <span class="px-2 py-2 text-sm text-gray-500">...</span>
                            @endif
                            <a href="{{ $posts->url($posts->lastPage()) }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
                                {{ $posts->lastPage() }}
                            </a>
                        @endif

                        {{-- Next Page --}}
                        @if ($posts->hasMorePages())
                            <a href="{{ $posts->nextPageUrl() }}" class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-blue-50 hover:text-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-100 active:text-blue-700 transition ease-in-out duration-200">
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
</div>
@endsection 