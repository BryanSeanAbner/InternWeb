@extends('layouts.admin')
@section('admin-title', 'Edit User')
@section('content')
<div class="max-w-lg mx-auto bg-white rounded shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Edit User</h2>
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border rounded px-3 py-2" required>
            @error('name')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border rounded px-3 py-2" required>
            @error('email')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Password Baru <span class="text-gray-500 text-sm">(Opsional)</span></label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
            @error('password')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2">
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
            <a href="{{ route('admin.users.index') }}" class="px-4 py-2 rounded border border-gray-300 hover:bg-gray-100">Batal</a>
        </div>
    </form>
</div>
@endsection 