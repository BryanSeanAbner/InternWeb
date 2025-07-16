@extends('layouts.admin')
@section('admin-title', 'Kategori')
@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold">Daftar Kategori</h2>
    <a href="{{ route('admin.kategori.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Kategori</a>
</div>
<div class="bg-white rounded shadow p-6 text-gray-700">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="py-2 px-4 text-left">Nama</th>
                <th class="py-2 px-4 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $cat)
            <tr>
                <td class="py-2 px-4">{{ $cat->name }}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('admin.kategori.edit', $cat) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('admin.kategori.destroy', $cat) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="3" class="py-4 text-center text-gray-500">Belum ada kategori.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection 