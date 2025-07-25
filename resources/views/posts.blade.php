<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

@extends('layouts.app')

@section('content')
<div class="bg-white">
    <header class="navbar-sticky fixed inset-x-0 top-0 z-50">
    <nav aria-label="Global" class=" bg-white flex items-center justify-between p-4 md:p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="#home" class="-m-1.5 p-1.5 text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
        </div>
        <div class="flex lg:hidden">
            <button id="mobile-menu-open" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-black focus:outline-none">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="w-7 h-7">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-8">
            <a href="#home" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Home</a>
            <a href="#berita" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Berita</a>
            <a href="#tentang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Tentang</a>
            <a href="#bidang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Bidang</a>
            <a href="#persyaratan" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Persyaratan</a>
            <a href="#testimonial" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Testimonial</a>
            <a href="#howtoapply" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Cara Mendaftar</a>
            <a href="#contactus" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Kontak</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-menu" class="fixed inset-0 z-50 hidden lg:hidden">
        <div class="fixed inset-0 bg-black/40" aria-hidden="true"></div>
        <div class="fixed inset-y-0 right-0 bg-white shadow-xl px-0 py-4 sm:ring-1 sm:ring-gray-900/10 flex flex-col items-start" style="width:fit-content; min-width:max-content;">
            <div class="flex items-center justify-between w-full pl-6 pr-2">
                <a href="#home" class="text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
                <button id="mobile-menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 focus:outline-none">
                    <span class="sr-only">Close menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="w-7 h-7">
                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flow-root bg-white w-full">
                <div class="flex-1 mt-4 w-full pl-6">
                    <div class="space-y-2 flex flex-col w-full">
                        <a href="#home" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Home</a>
                        <a href="#berita" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100font-poppins">Berita</a>
                        <a href="#tentang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100  font-poppins">Tentang</a>
                        <a href="#bidang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Bidang</a>
                        <a href="#persyaratan" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Persyaratan</a>
                        <a href="#testimonial" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Testimonial</a>
                        <a href="#howtoapply" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Cara Mendaftar</a>
                        <a href="#contactus" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header> 
</div>
<div class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold text-black-700 text-left mb-4 sm:mb-6 font-poppins px-4 sm:px-6 lg:px-8">Semua Berita</div>
    <div class="py-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">  
            @foreach ($posts as $post)
                <article class="p-4 sm:p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="w-full h-24 sm:h-28 md:h-32 lg:h-36 bg-gray-100 flex items-center justify-center text-gray-500 text-sm sm:text-base mb-4 sm:mb-5 rounded-xl overflow-hidden">
                        @if($post->photo)
                            <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-sm sm:text-base">IMAGE</span>
                        @endif
                    </div>
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/categories/{{ $post->category->slug }}">
                            <span class="inline-block bg-blue-700 text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 font-poppins">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->format('d M Y') }}</span>
                    </div>
                    <a href="/posts/{{ $post->slug }}" class="hover:underline">
                        <h2 class="mb-2 text-lg sm:text-xl md:text-2xl font-bold tracking-tight text-gray-900">
                            {{ $post->title }}
                        </h2>
                    </a>
                    <p class="mb-4 sm:mb-5 font-light text-gray-500 text-sm sm:text-base">
                        {{ Str::limit($post->body, 150) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="#" onclick="showPostModal('{{ $post->slug }}'); return false;" class="inline-flex items-center font-medium text-primary-600 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>

{{-- Modal dan Script --}}
<div id="postModalOverlay" class="hidden fixed inset-0 z-50 bg-black bg-opacity-50">
    <div id="postModalContent" class="bg-white mx-4 sm:mx-8 md:mx-auto mt-8 sm:mt-16 md:mt-20 p-0 max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-4xl rounded-xl relative shadow-2xl">
        <span onclick="closePostModal()" class="absolute top-2 sm:top-4 right-4 sm:right-6 cursor-pointer text-2xl sm:text-3xl font-bold text-gray-500 hover:text-gray-700">&times;</span>
        <div id="postModalBody" class="p-4 sm:p-6"></div>
    </div>
</div>
<script>
function showPostModal(slug) {
    fetch('/posts/' + slug + '/modal')
        .then(res => res.text())
        .then(html => {
            document.getElementById('postModalBody').innerHTML = html;
            document.getElementById('postModalOverlay').classList.remove('hidden');
        });
}
function closePostModal() {
    document.getElementById('postModalOverlay').classList.add('hidden');
    document.getElementById('postModalBody').innerHTML = '';
}
</script>
