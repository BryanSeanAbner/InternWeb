@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <div class="bg-white rounded shadow p-8 max-w-xl mx-auto">
        <h1 class="text-3xl font-bold mb-4 text-center">Selamat Datang di Halaman Admin</h1>
        <p class="mb-6 text-center text-gray-700">Anda berhasil login sebagai admin. Hanya user yang sudah login yang bisa mengakses halaman ini.</p>
        <div class="text-center mt-6">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection 