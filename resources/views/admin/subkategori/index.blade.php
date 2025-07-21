@extends('layouts.admin')
@section('admin-title', 'Subkategori')
@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold">Daftar Subkategori dari {{ $category->name }}</h2>
    <a href="{{ route('categories.subcategories.create', $category->slug) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Subkategori</a>
</div>
<div class="bg-white rounded shadow p-6 text-gray-700">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="py-2 px-4 text-left">Nama</th>
                <th class="py-2 px-4 text-left">Deskripsi</th>
                <th class="py-2 px-4 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($subcategories as $sub)
            <tr>
                <td class="py-2 px-4">{{ $sub->name }}</td>
                <td class="py-2 px-4">{{ $sub->description }}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('admin.subkategori.edit', [$category->slug, $sub->id]) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('admin.subkategori.destroy', [$category->slug, $sub->id]) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="3" class="py-4 text-center text-gray-500">Belum ada subkategori.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection 