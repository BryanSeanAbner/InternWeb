@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-200 to-teal-200 py-12">
    <div class="max-w-6xl w-full mx-auto flex flex-col lg:flex-row items-center justify-center gap-12 px-4">
        <!-- Kiri: Judul & Deskripsi -->
        <div class="flex-1 bg-white/80 rounded-2xl shadow-lg p-10 flex flex-col justify-center items-start min-h-[350px]">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-6">{{ $category->name }}</h1>
            <div class="text-lg text-gray-700 leading-relaxed">{{ $category->description ?? '' }}</div>
        </div>
        <!-- Kanan: Card Gambar -->
        <div class="flex-1 flex justify-center items-center">
            <div class="bg-white rounded-2xl shadow-xl flex flex-col items-center justify-center min-h-[350px] min-w-[350px] max-w-[400px] w-full p-8">
                @if($category->photo)
                    <img src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->name }}" class="w-32 h-32 object-cover rounded-full mb-6 shadow" />
                @endif
                <div class="text-2xl font-semibold text-gray-700 text-center flex items-center gap-2">
                    @if($category->icon)
                        <span class="text-3xl">{!! $category->icon !!}</span>
                    @endif
                    {{ $category->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 