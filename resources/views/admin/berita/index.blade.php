@extends('layouts.admin')
@section('admin-title', 'Berita')
@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold">Daftar Berita</h2>
    <a href="{{ route('admin.berita.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Berita</a>
</div>
<div class="bg-white rounded shadow p-6 text-gray-700">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="py-2 px-4 text-left">Judul</th>
                <th class="py-2 px-4 text-left">Kategori</th>
                <th class="py-2 px-4 text-left">Tanggal</th>
                <th class="py-2 px-4 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td class="py-2 px-4">{{ $post->title }}</td>
                <td class="py-2 px-4">{{ $post->category ? $post->category->name : '-' }}</td>
                <td class="py-2 px-4">{{ $post->created_at->format('d-m-Y') }}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('admin.berita.edit', $post) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('admin.berita.destroy', $post) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="4" class="py-4 text-center text-gray-500">Belum ada berita.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection 