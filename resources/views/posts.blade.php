@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="pt-20">
        <div class="text-black text-sm sm:text-base md:text-lg lg:text-xl font-bold text-left mb-2 sm:mb-4 font-poppins px-2 sm:px-4 lg:px-6 py-2 rounded-lg ml-2 sm:ml-4 lg:ml-8 mt-1 sm:mt-2">
            Semua Berita
        </div>
    <header class="navbar-sticky fixed inset-x-0 top-0 z-50 shadow-lg transition-all duration-300" id="navbar">
    <nav aria-label="Global" class=" bg-white flex items-center justify-between p-4 md:p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="{{ route('home') }}#home" class="-m-1.5 p-1.5 text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
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
            <a href="{{ route('home') }}#home" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-colors duration-200">Home</a>
                         <a href="{{ route('posts.index') }}" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-colors duration-200">Berita</a>
            <a href="{{ route('home') }}#tentang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-colors duration-200">Tentang</a>
            <a href="{{ route('home') }}#bidang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-colors duration-200">Bidang</a>
            <a href="{{ route('home') }}#persyaratan" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-colors duration-200">Persyaratan</a>
            <a href="{{ route('home') }}#testimonial" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-colors duration-200">Testimonial</a>
            <a href="{{ route('home') }}#howtoapply" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-colors duration-200">Cara Mendaftar</a>
            <a href="{{ route('home') }}#contactus" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-colors duration-200">Kontak</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-menu" class="fixed inset-0 z-50 hidden lg:hidden">
        <div class="fixed inset-0 bg-black/40" aria-hidden="true"></div>
        <div class="fixed inset-y-0 right-0 bg-white shadow-xl px-0 py-4 sm:ring-1 sm:ring-gray-900/10 flex flex-col items-start" style="width:fit-content; min-width:max-content;">
            <div class="flex items-center justify-between w-full pl-6 pr-2">
                <a href="{{ route('home') }}#home" class="text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
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
                        <a href="{{ route('home') }}#home" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Home</a>
                                                 <a href="{{ route('posts.index') }}" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Berita</a>
                        <a href="{{ route('home') }}#tentang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100  font-poppins">Tentang</a>
                        <a href="{{ route('home') }}#bidang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Bidang</a>
                        <a href="{{ route('home') }}#persyaratan" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Persyaratan</a>
                        <a href="{{ route('home') }}#testimonial" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Testimonial</a>
                        <a href="{{ route('home') }}#howtoapply" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Cara Mendaftar</a>
                        <a href="{{ route('home') }}#contactus" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header> 
</div>
    <div class="py-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">  
            @foreach ($posts as $post)
                <article class="p-4 sm:p-6 bg-white rounded-lg border border-gray-200 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 animate-fade-in-up">
                    <div class="w-full aspect-[5/3] bg-gray-100 flex items-center justify-center text-gray-500 text-sm sm:text-base mb-4 sm:mb-5 rounded-xl overflow-hidden">
                        @if($post->photo)
                            <img src="@photo($post->photo)" alt="{{ $post->title }}" class="w-full h-full object-cover object-center">
                        @else
                            <span class="text-sm sm:text-base">IMAGE</span>
                        @endif
                    </div>
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        @if($post->category && $post->category->is_required)
                            <a href="{{ route('categories.show', $post->category->slug) }}" class="inline-block bg-blue-700 text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider font-poppins hover:bg-blue-800 transition-colors duration-200 cursor-pointer">
                                {{ $post->category->name }}
                            </a>
                        @elseif($post->category && !$post->category->is_required)
                            <span class="inline-block bg-blue-700 text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider font-poppins cursor-not-allowed">
                                {{ $post->category->name }}
                            </span>
                        @else
                            <span class="inline-block bg-blue-700 text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider font-poppins">
                                Uncategorized
                            </span>
                        @endif
                        <span class="text-sm">{{ $post->created_at->format('d M Y') }}</span>
                    </div>
                    <a href="{{ route('posts.show', $post) }}" class="hover:underline">
                        <h2 class="mb-2 text-lg sm:text-xl md:text-2xl font-bold tracking-tight text-gray-900">
                            {{ $post->title }}
                        </h2>
                    </a>
                    <p class="mb-4 sm:mb-5 font-light text-gray-500 text-sm sm:text-base">
                        {{ Str::limit($post->body, 150) }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('posts.show', $post) }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 hover:underline">
                            Baca Selengkapnya
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
<!-- External JavaScript -->
<script src="{{ asset('js/posts.js') }}"></script>
@endsection
