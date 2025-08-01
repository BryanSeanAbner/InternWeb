@extends('layouts.admin')
@section('admin-title', 'Kategori')
@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold">Daftar Kategori</h2>
    <a href="{{ route('admin.kategori.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Kategori Terbaru</a>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach($categories as $cat)
    <div class="bg-white rounded-xl shadow p-6 flex flex-col justify-between">
        <div>
            <a href="{{ route('admin.subkategori.index', $cat->slug) }}" class="font-semibold text-lg text-blue-700 hover:underline">{{ $cat->name }}</a>
            <div class="text-gray-500 text-sm mt-2">
                <span class="font-semibold">Deskripsi:</span> {{ Str::limit($cat->description ?: '-' ,60) }}
            </div>
        </div>
        <div class="flex gap-2 mt-4 justify-end">
            <a href="{{ route('admin.kategori.edit', $cat) }}" class="text-blue-600 hover:text-blue-800" title="Edit">
                <!-- Heroicons: Pencil Square -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 3.487a2.25 2.25 0 1 1 3.182 3.183L7.5 19.213l-4.182.465a.75.75 0 0 1-.83-.83l.465-4.182L16.862 3.487z" />
                </svg>
            </a>
            <form action="{{ route('admin.kategori.destroy', $cat) }}" method="POST" onsubmit="return confirm('Yakin hapus kategori ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-800" title="Hapus">
                    <!-- Heroicons: Trash -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection 