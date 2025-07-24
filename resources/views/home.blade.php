@extends('layouts.app')

@section('content')
<div style="min-height:100vh; background: linear-gradient(135deg, #003B99 0%, #2FCC91 100%);">
<nav class="bg-transparent text-white shadow navbar-sticky">
    <div class="container mx-auto flex justify-between items-center py-5 px-6">
        <div class="text-2xl font-bold tracking-wide">Nusantara TV</div>
        <ul class="flex space-x-8 font-semibold text-lg">
            <li><a href="#home" class="hover:text-blue-300">Home</a></li>
            <li><a href="#berita" class="hover:text-blue-300">Berita</a></li>
            <li><a href="#tentang" class="hover:text-blue-300">Tentang</a></li>
            <li><a href="#bidang" class="hover:text-blue-300">Bidang</a></li>
            <li><a href="#persyaratan" class="hover:text-blue-300">Persyaratan</a></li>
            <li><a href="#testimonial" class="hover:text-blue-300">Testimonial</a></li>
            <li><a href="#howtoapply" class="hover:text-blue-300">Cara Mendaftar</a></li>
            <li><a href="#contactus" class="hover:text-blue-300">Kontak</a></li>
        </ul>
    </div>
</nav>
<style>
html, body {
    min-height: 100vh;  
    height: 100%;
    background: linear-gradient(135deg, #003B99 0%, #2FCC91 100%) !important;
    background-attachment: fixed !important;
    scroll-behavior: smooth;
}
main, .container, .content, #app {
    background: transparent !important;
}
body {
    background: linear-gradient(135deg, #003B99 0%, #2FCC91 100%);
    min-height: 100vh;
}
.hero-section {
    /* background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%); */
    background: transparent;
    padding: 120px 0 100px 0;
    text-align: center;
    color: #fff;
}
.hero-title {
    font-size: 4rem;
    font-weight: 800;
    margin-bottom: 40px;
    line-height: 1.1;

}


@media (min-width: 768px) {
    .hero-title {
        font-size: 5.5rem;
    }
}
.hero-subtitle {
    font-size: 1.7rem;
    font-weight: 400;
    margin-bottom: 48px;
    color: #e0e7ef;
}
.hero-btn {
    display: inline-block;
    padding: 18px 48px;
    font-size: 1.3rem;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(90deg, #2563eb 60%, #3b82f6 100%);
    border: none;
    border-radius: 999px;
    box-shadow: 0 8px 32px 0 rgba(37,99,235,0.25);
    transition: background 0.2s, box-shadow 0.2s;
    margin-bottom: 30px;
}
.hero-btn:hover {
    background: linear-gradient(90deg, #1d4ed8 60%, #2563eb 100%);
    box-shadow: 0 12px 40px 0 rgba(37,99,235,0.35);
}
.berita-section {
    /* background: #f8fafc; */
    /* background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%); */
    background: transparent;
    padding: 60px 0 40px 0;
}
.berita-title {
  color:  #f8fafc;
    font-size: 2.5rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 32px;
}
.apply-section-bg {
    /* background: #eaf2fd; */
    background: transparent;
    padding: 64px 0 48px 0;
    margin-top: 0;
}
.apply-steps-container {
    max-width: 1200px;
    margin: 0 auto;
}
.apply-steps-row {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: flex-start;
    gap: 32px;
    margin-bottom: 48px;
}
.apply-step {
    flex: 1 1 180px;
    min-width: 180px;
    max-width: 220px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.apply-step-circle {
    width: 72px;
    height: 72px;
    background: rgb(21, 213, 130);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 18px;
    box-shadow: 0 2px 12px 0 rgba(37,99,235,0.10);
}
.apply-step-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: #FFFFFF;
    margin-bottom: 8px;
    text-align: center;
}
.apply-step-desc {
    font-size: 1.02rem;
    color: #FFFFFF;
    opacity: 0.95;
    text-align: center;
    margin-bottom: 10px;
}
.apply-step-line {
    align-self: center;
    width: 32px;
    height: 4px;
    background: #FFFFFF;
    border-radius: 2px;
    opacity: 0.5;
    margin-top: 32px;
}
.apply-step-bottom {
    display: flex;
    justify-content: center;
    margin-top: 0;
}

@media (max-width: 900px) {
    .apply-steps-row {
        flex-direction: column;
        gap: 0;
        align-items: center;
    }
    .apply-step-line {
        width: 4px;
        height: 32px;
        margin: 0 auto;
    }
}
.navbar-sticky {
    position: sticky;
    top: 0;
    z-index: 100;
    background: transparent;
    transition: background 0.3s, box-shadow 0.3s;
    backdrop-filter: blur(2px);
}
.navbar-colored {
    background: linear-gradient(90deg, #003B99 80%, #2FCC91 0%);
    box-shadow: 0 2px 12px 0 rgba(0,0,0,0.04);
}
@keyframes marquee-left {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.marquee-track {
  animation: marquee-left 180s linear infinite;
}
</style>
<script>
// Fungsi untuk interpolasi warna gradasi biru ke hijau
function lerpColor(a, b, t) {
    return [
        Math.round(a[0] + (b[0] - a[0]) * t),
        Math.round(a[1] + (b[1] - a[1]) * t),
        Math.round(a[2] + (b[2] - a[2]) * t)
    ];
}
function rgbToString(rgb, alpha = 1) {
    return `rgba(${rgb[0]},${rgb[1]},${rgb[2]},${alpha})`;
}
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar-sticky');
    const docHeight = document.body.scrollHeight - window.innerHeight;
    const scrollY = window.scrollY;
    // Persentase posisi scroll terhadap total dokumen
    const t = Math.min(scrollY / docHeight, 1);
    // Warna gradasi: biru (#003B99) ke hijau (#2FCC91)
    const colorTop = [0, 59, 153]; // #003B99
    const colorBottom = [47, 204, 145]; // #2FCC91
    const darken = 1; // semakin kecil, semakin gelap
    const lerped = lerpColor(colorTop, colorBottom, t).map(v => Math.round(v * darken));
    navbar.style.background = rgbToString(lerped, 0.5); // solid, bisa diubah ke 0.95 jika ingin sedikit transparan
    navbar.style.boxShadow = t > 0.01 ? '0 2px 12px 0 rgba(0,0,0,0.04)' : 'none';
});
</script>
@php
    $latestPosts = \App\Models\Post::with(['author', 'category'])->latest()->take(3)->get();
    $benefits = \App\Models\InternshipBenefit::all();
    $category = \App\Models\Category::whereNull('parent_id')->get();
    
    $posts = ($allPosts ?? $latestPosts)->map(function($post) {
        return [
            'id' => $post->id,
            'title' => $post->title,
            'photo' => $post->photo,
            'photo_url' => $post->photo ? asset('storage/' . $post->photo) : null,
            'url' => route('posts.show', $post),
        ];
    });
@endphp
<div class="hero-section" id="home">
    <h1 class="hero-title ">Mulai Pengalaman Magangmu di <br>Nusantara TV</h1>
    
</div>
<!-- Berita SECTION -->
<div class="berita-section" id="berita">
    <div class="mb-8">
        <div style="width: 80px; height: 4px; background: #FFFFFF; margin: 0 auto 40px auto; border-radius: 2px;"></div>
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 px-4 md:px-8">
            @foreach(($allPosts ?? $latestPosts) as $post)
                <div class="bg-white rounded-lg shadow border p-6 flex flex-col justify-between transition hover:shadow-lg">
                    <div style="width:100%;height:120px;background:#f3f4f6;display:flex;align-items:center;justify-content:center;color:#888;font-size:15px;margin-bottom:18px;border-radius:12px;overflow:hidden;">
                        @if($post->photo)
                            <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}" style="width:100%;height:100%;object-fit:cover;">
                        @else
                            IMAGE
                        @endif
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold"
                              style="background:{{ $post->category->color ?? '#eee' }}20; color:{{ $post->category->color ?? '#333' }}">
                            {{ $post->category->name ?? '-' }}
                        </span>
                        <span class="text-xs text-gray-500">
                            {{ $post->created_at->format('F d, Y') }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <h2 class="text-lg font-bold mb-1">{{ $post->title }}</h2>
                        <p class="text-gray-500 leading-relaxed">
                            {{ Str::limit(strip_tags($post->body), 100) }}
                        </p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a href="{{ route('posts.show', $post) }}" 
                           class="text-blue-600 font-semibold flex items-center gap-1 hover:underline">
                            Read more &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('posts.index') }}" 
               class="inline-block bg-blue-500 text-white px-6 py-2 rounded font-bold hover:bg-blue-600 transition">
                See more
            </a>
        </div>
    </div>
</div>
@php
    $benefits = \App\Models\InternshipBenefit::all();
@endphp
<div class="tentang-section" id="tentang" style="background: transparent; padding: 64px 0 48px 0; margin-top: 0;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size:2.5rem; font-weight:700; text-align:center; color:#FFFFFF; margin-bottom: 18px;">Tentang Magang</h2>
        <div style="width: 80px; height: 4px; background: #FFFFFF; margin: 0 auto 40px auto; border-radius: 2px;"></div>
        <div style="display: flex; flex-direction: row; gap: 32px; justify-content: center; align-items: stretch; flex-wrap: nowrap; padding: 0 24px;">
            @foreach($benefits as $benefit)
                <div style="background:#fff; border-radius:22px; box-shadow:0 4px 24px 0 rgba(37,99,235,0.08); padding:36px 24px; text-align:center; display:flex; flex-direction:column; align-items:center; min-width:320px; max-width:350px; flex: 0 0 320px;">
                    <div style="font-size:3rem; margin-bottom:18px;">{{ $benefit->icon }}</div>
                    <div style="font-size:1.25rem; font-weight:700; color:#2563eb; margin-bottom:12px;">{{ $benefit->title }}</div>
                    <div style="font-size:1.05rem; color:#444;">{{ $benefit->description }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@php
    $category = \App\Models\Category::whereNull('parent_id')->get();
@endphp
<div class="bidang-section" id="bidang" style="background: transparent; padding: 64px 0 48px 0; margin-top: 0;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size:2.5rem; font-weight:700; text-align:center; color:#FFFFFF; margin-bottom: 18px;">Kategori Bidang Magang </h2>
        <div style="width: 120px; height: 4px; background: #FFFFFF; margin: 0 auto 40px auto; border-radius: 2px;"></div>
        <style>
        .category-card {
            position: relative;
            background: #2563eb;
            border-radius: 22px;
            box-shadow: 0 4px 24px 0 rgba(37,99,235,0.10);
            min-width: 260px;
            max-width: 300px;
            flex: 0 0 260px;
            color: #fff;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 260px;
            transition: transform 0.18s, box-shadow 0.18s;
        }
        .category-card:hover {
            transform: translateY(-8px) scale(1.04);
            box-shadow: 0 8px 32px 0 rgba(37,99,235,0.18);
            z-index: 2;
        }
        .category-card-bg {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            width: 100%; height: 100%;
            object-fit: cover;
            z-index: 1;
            filter: brightness(0.7) blur(0px);
            transition: filter 0.18s;
        }
        .category-card:hover .category-card-bg {
            filter: brightness(0.95) blur(1px);
        }
        .category-card-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .category-card-title {
            position: relative;
            z-index: 3;
            font-size: 1.35rem;
            font-weight: 700;
            text-align: center;
            text-shadow: 0 2px 8px rgba(0,0,0,0.13);
        }
        </style>
        <div style="display: flex; flex-direction: row; gap: 32px; justify-content: center; align-items: stretch; flex-wrap: wrap; padding: 0 24px;">
            @foreach($category as $cat)
                <a href="{{ route('categories.show', $cat->slug) }}" class="category-card transition-transform hover:scale-105">
                    @if($cat->photo)
                        <img src="{{ asset('storage/' . $cat->photo) }}" alt="{{ $cat->name }}" class="category-card-bg">
                    @endif
                    <div class="category-card-overlay"></div>
                    <div class="category-card-title">{{ $cat->name }}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@php
    $requirements = \App\Models\Requirement::all();
@endphp
<div class="persyaratan-section" id="persyaratan" style="background: transparent; padding: 64px 0 48px 0; margin-top: 0;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size:2.5rem; font-weight:700; text-align:center; color:#FFFFFF; margin-bottom: 18px;">Persyaratan</h2>
        <div style="width: 120px; height: 4px; background: #FFFFFF; margin: 0 auto 40px auto; border-radius: 2px;"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 md:px-8">
            @foreach($requirements as $req)
                <div style="background:#fff; border-radius:22px; box-shadow:0 4px 24px 0 rgba(37,99,235,0.08); padding:32px 24px; display:flex; flex-direction:column; align-items:flex-start; min-height:180px;">
                    <div style="font-size:2rem; margin-bottom:10px;">{{ $req->icon }}</div>
                    <div style="font-size:1.15rem; font-weight:700; color:#2563eb; margin-bottom:8px; display:flex; align-items:center;">
                        {{ $req->title }}
                        @if($req->is_optional)
                            <span style="font-size:0.95rem; color:#888; font-weight:400; margin-left:8px;">(Optional)</span>
                        @endif
                    </div>
                    <div style="font-size:1.05rem; color:#222; opacity:0.95;">{{ $req->description }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@php
    $testimonials = \App\Models\Testimonial::all();
@endphp
<div class="testimonial-section" id="testimonial" style="background: transparent; padding: 64px 0 48px 0; margin-top: 0; border-radius: 32px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size:2.5rem; font-weight:700; text-align:center; color:#fff; margin-bottom: 18px;">Apa Kata Mereka tentang Program Magang Ini</h2>
        <div style="width: 120px; height: 4px; background: #fff; margin: 0 auto 40px auto; border-radius: 2px;"></div>
        <div class="relative w-full overflow-hidden py-8 bg-transparent">
            <div class="flex gap-8 marquee-track w-max">
                @foreach($testimonials as $t)
                    <div class="bg-white/80 rounded-xl shadow-lg border border-white/40 p-6 max-w-sm w-full flex-shrink-0 flex flex-col items-center text-gray-800">
                        <img src="{{ $t->photo ? asset('storage/'.$t->photo) : asset('img/default-avatar.png') }}" alt="{{ $t->name }}" class="w-16 h-16 rounded-full mb-3 border-2 border-white shadow" />
                        <div class="italic text-sm mb-3 text-center text-gray-700">"{{ $t->description }}"</div>
                        <div class="font-bold text-base mb-1 text-blue-900">{{ $t->name }}</div>
                        @if($t->category)
                            <div class="text-xs text-gray-500">{{ $t->category->name }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.mySwiper-testimoni', {
        slidesPerView: 'auto',
        spaceBetween: 24,
        loop: true,
        freeMode: false,
        direction: 'horizontal',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next-testimoni',
            prevEl: '.swiper-button-prev-testimoni',
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
            reverseDirection: false
        },
        speed: 800,
        // breakpoints tidak perlu karena slidesPerView:auto
    });
});
</script>
@endpush
@php
    $applySteps = \App\Models\ApplyStep::orderBy('step_number')->get();
@endphp
<div class="apply-section-bg" id="howtoapply">
    <div class="apply-steps-container">
        <h2 style="font-size:2.5rem; font-weight:700; text-align:center; color:#FFFFFF; margin-bottom: 18px;">Cara Mendaftar</h2>
        <div style="width: 120px; height: 4px; background: #FFFFFF; margin: 0 auto 40px auto; border-radius: 2px;"></div>
        <div class="apply-steps-row">
            @foreach($applySteps as $step)
                <div class="apply-step">
                    <div class="apply-step-circle">{{ $step->step_number }}</div>
                    <div class="apply-step-title">{{ $step->title }}</div>
                    <div class="apply-step-desc">{{ $step->description }}</div>
                </div>
                @if(!$loop->last)
                    <div class="apply-step-line"></div>
                @endif
            @endforeach
        </div>
        @if($applySteps->last() && $applySteps->last()->button_text)
            <div style="text-align:center; margin-top:40px;">
                <a href="{{ $applySteps->last()->button_link ?? '#' }}" style="display:inline-block; background:rgb(21, 213, 130); color:#fff; font-weight:700; font-size:1.2rem; padding:18px 48px; border-radius:999px; box-shadow:0 8px 32px 0 rgba(37,99,235,0.18); text-decoration:none;">{{ $applySteps->last()->button_text }}</a>
            </div>
        @endif
    </div>
</div>
<footer class="footer-section" id="contactus" style="padding: 48px 0 0 0; margin-top: 48px; background: url('{{ asset('storage/banner-background.jpg') }}') center/cover no-repeat; color: #fff;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; gap: 32px; padding: 0 32px;">
        <div style="flex:1; min-width:220px; max-width:340px;">
            <div style="font-size:2rem; font-weight:700; margin-bottom:15px;">Lokasi Nusantara TV</div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.585492366193!2d106.87387437428204!3d-6.186187460609973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5689acb01bd%3A0xdb532d1cdbfa11e7!2sNT%20Tower!5e0!3m2!1sen!2sid!4v1752052938203!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div style="flex:1; min-width:220px; max-width:340px;">
            <div style="font-size:1.2rem; font-weight:700; margin: bottom 10px;">Kontak Info :</div>
            <div style="margin-bottom:8px;">Email: <br>hello@nttower.com</br></div>
            <div style="margin-bottom:12px;">Call us at: <br>0881-0100-65128</br></div>
            <div style="margin-bottom:12px;">Our Location:: <br>Jl. Pulomas Selatan Kav. Blok, Kota Jakarta Timur 13210</br></div>
            <div style="display:flex; gap:16px; margin-top:16px;">
                <a href="https://facebook.com" target="_blank" style="color:#fff; font-size:2rem; display:inline-block;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0" fill="#fff"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" style="color:#fff; font-size:2rem; display:inline-block;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.242 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.242-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.567 5.783 2.295 7.149 2.233 8.415 2.175 8.795 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.363 3.678 1.344c-.98.98-1.213 2.092-1.272 3.373C2.013 5.668 2 6.077 2 12c0 5.923.013 6.332.072 7.613.059 1.281.292 2.393 1.272 3.373.98.98 2.092 1.213 3.373 1.272C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.281-.059 2.393-.292 3.373-1.272.98-.98 1.213-2.092 1.272-3.373.059-1.281.072-1.69.072-7.613 0-5.923-.013-6.332-.072-7.613-.059-1.281-.292-2.393-1.272-3.373-.98-.98-2.092-1.213-3.373-1.272C15.668.013 15.259 0 12 0z" fill="#fff"/><path d="M12 5.838A6.162 6.162 0 0 0 5.838 12 6.162 6.162 0 0 0 12 18.162 6.162 6.162 0 0 0 18.162 12 6.162 6.162 0 0 0 12 5.838zm0 10.162A3.999 3.999 0 1 1 12 8a3.999 3.999 0 0 1 0 7.999zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" fill="#fff"/></svg>
                </a>
                <a href="https://linkedin.com" target="_blank" style="color:#fff; font-size:2rem; display:inline-block;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19 0h-14C2.239 0 0 2.239 0 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5V5c0-2.761-2.239-5-5-5zm-9 19H5V9h5v10zm-2.5-11.268c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5 2.5 1.119 2.5 2.5-1.119 2.5-2.5 2.5zm15.5 11.268h-5v-5.604c0-1.337-.025-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.968V19h-5V9h4.8v1.367h.069c.669-1.267 2.304-2.604 4.742-2.604 5.073 0 6.012 3.341 6.012 7.686V19z" fill="#fff"/></svg>
                </a>
            </div>
        </div>
    </div>
    <div style="border-top:1px solid #ffffff22; margin-top:36px; padding:18px 0 12px 0; text-align:center; font-size:1rem; opacity:0.85;">
        &copy; 2025 Nusantara TV. All rights reserved.
    </div>
</footer>
</div>
@endsection