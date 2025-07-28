@extends('layouts.app')

@section('content')

<!-- Header/Navbar -->
<div class="bg-white">
    <header class="navbar-sticky fixed inset-x-0 top-0 z-50">
    <nav aria-label="Global" class=" bg-white flex items-center justify-between p-4 md:p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5 text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
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
            <a href="{{ route('home') }}" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Home</a>
            <a href="{{ route('home') }}#berita" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Berita</a>
            <a href="{{ route('home') }}#tentang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Tentang</a>
            <a href="{{ route('home') }}#bidang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Bidang</a>
            <a href="{{ route('home') }}#persyaratan" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Persyaratan</a>
            <a href="{{ route('home') }}#testimonial" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Testimonial</a>
            <a href="{{ route('home') }}#howtoapply" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Cara Mendaftar</a>
            <a href="{{ route('home') }}#contactus" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Kontak</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-menu" class="fixed inset-0 z-50 hidden lg:hidden">
        <div class="fixed inset-0 bg-black/40" aria-hidden="true"></div>
        <div class="fixed inset-y-0 right-0 bg-white shadow-xl px-0 py-4 sm:ring-1 sm:ring-gray-900/10 flex flex-col items-start" style="width:fit-content; min-width:max-content;">
            <div class="flex items-center justify-between w-full pl-6 pr-2">
                <a href="{{ route('home') }}" class="text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
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
                        <a href="{{ route('home') }}" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Home</a>
                        <a href="{{ route('home') }}#berita" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Berita</a>
                        <a href="{{ route('home') }}#tentang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Tentang</a>
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
    <!-- Main Content -->
    <main class="pt-20 max-w-7xl mx-auto mt-8 px-4 md:px-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Post Detail -->
        <div class="lg:col-span-2">
            <div class="w-full h-56 md:h-80 rounded-xl bg-gray-200 flex items-center justify-center overflow-hidden mb-8">
                @if($post->photo)
                    <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}" class="w-full h-full object-cover" />
                @else
                    <span class="text-gray-500">FEATURED STORY IMAGE</span>
                @endif
            </div>
            <div class="bg-white rounded-xl shadow p-6 md:p-10">
                <div class="inline-block bg-blue-700 text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-4 font-poppins">
                    {{ $post->category->name ?? 'Uncategorized' }}
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-4 leading-tight font-poppins">{{ $post->title }}</h1>
                <div class="flex flex-wrap gap-4 text-sm text-gray-500 mb-6">
                    <span class="font-poppins">By Editorial Team</span>
                    <span class="font-poppins">|</span>
                    <span class="font-poppins">{{ $post->created_at->format('F d, Y') }}</span>
                </div>
                <div class="prose max-w-none text-gray-800 text-base md:text-lg leading-relaxed">
                    {!! nl2br(e($post->body)) !!}
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <aside class="lg:col-span-1">
            <div class="text-xl font-bold mb-6 text-gray-800 font-poppins">Berita yang serupa dengan bidang ini</div>
            <div class="flex flex-col gap-4">
                @forelse($sidePosts as $side)
                    <div class="bg-white rounded-lg shadow-xl p-4 flex flex-col">
                        <div class="w-full h-28 rounded-md bg-gray-100 flex items-center justify-center overflow-hidden mb-3">
                            @if($side->photo)
                                <img src="{{ asset('storage/' . $side->photo) }}" alt="{{ $side->title }}" class="w-full h-full object-cover" />
                            @else
                                <span class="text-gray-500 text-sm">IMAGE</span>
                            @endif
                        </div>
                        <div class="font-semibold text-gray-900 text-base mb-1 font-poppins">{{ $side->title }}</div>
                        <div class="text-xs text-gray-500 mb-2 font-poppins">{{ $side->created_at->format('F d, Y') }}</div>
                        <div class="text-sm text-gray-700 font-poppins">{{ Str::limit(strip_tags($side->body), 100) }}</div>
                    </div>
                @empty
                    <div class="text-gray-400 text-sm font-poppins">Tidak ada berita serupa.</div>
                @endforelse
            </div>
        </aside>
    </main>
    <!-- Mobile Navbar Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openBtn = document.getElementById('mobile-menu-open');
            const closeBtn = document.getElementById('mobile-menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
            openBtn.addEventListener('click', function(e) {
                e.preventDefault();
                mobileMenu.classList.remove('hidden');
            });
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                mobileMenu.classList.add('hidden');
            });
            mobileMenu.querySelector('.bg-black\/40').addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                });
            });
        });
    </script>