@extends('layouts.admin')
@section('admin-title', 'Testimoni')

@section('content')
<div class="container mx-auto py-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Daftar Testimoni</h2>
        <a href="{{ route('admin.testimonials.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Testimoni</a>
    </div>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Kategori</th>
                    <th class="px-4 py-2">Isi</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $t)
                <tr>
                    <td class="border px-4 py-2">{{ $t->name }}</td>
                    <td class="border px-4 py-2">{{ $t->category->name ?? '-' }}</td>
                    <td class="border px-4 py-2">{{ Str::limit($t->description, 60) }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.testimonials.edit', $t) }}" class="text-blue-600">Edit</a>
                        <form action="{{ route('admin.testimonials.destroy', $t) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $testimonials->links() }}</div>
</div>
@endsection 