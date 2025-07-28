@extends('layouts.admin')
@section('admin-title', 'Testimoni')
@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold">Daftar Testimoni</h2>
    <a href="{{ route('admin.testimonials.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Testimoni</a>
</div>
@if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
@endif
<div class="bg-white rounded shadow p-6 text-gray-700">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="py-2 px-4 text-left">Nama</th>
                <th class="py-2 px-4 text-left">Kategori</th>
                <th class="py-2 px-4 text-left">Instansi</th>
                <th class="py-2 px-4 text-left">Isi Testimoni</th>
                <th class="py-2 px-4 text-left">Tanggal</th>
                <th class="py-2 px-4 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($testimonials as $testimonial)
            <tr>
                <td class="py-2 px-4">{{ $testimonial->name }}</td>
                <td class="py-2 px-4">{{ $testimonial->category ? $testimonial->category->name : '-' }}</td>
                <td class="py-2 px-4">{{ $testimonial->instansi ? $testimonial->instansi : '-' }}</td>
                <td class="py-2 px-4">{{ Str::limit($testimonial->description, 60) }}</td>
                <td class="py-2 px-4">{{ $testimonial->created_at->format('d-m-Y') }}</td>
                <td class="py-2 px-4">
                    <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                    <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="py-4 text-center text-gray-500">Belum ada testimoni.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@if($testimonials->hasPages())
    <div class="mt-6">{{ $testimonials->links() }}</div>
@endif
@endsection 