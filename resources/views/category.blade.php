<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} - Nusantara TV Internship</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #ffffff; color: #1a1a1a; line-height: 1.6; overflow-x: hidden; }
        .container { max-width: 1400px; margin: 0 auto; padding: 0 24px; }
        header { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(20px); border-bottom: 1px solid rgba(0, 0, 0, 0.1); padding: 24px 0; position: fixed; top: 0; width: 100%; z-index: 1000; transition: all 0.3s ease; }
        .header-content { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 32px; font-weight: 900; color: #1a1a1a; letter-spacing: -0.02em; }
        .nav-links { display: flex; gap: 40px; }
        .nav-links a { text-decoration: none; color: #4a4a4a; font-weight: 500; font-size: 16px; transition: all 0.3s ease; position: relative; padding: 8px 0; }
        .nav-links a::after { content: ''; position: absolute; bottom: 0; left: 0; width: 0; height: 2px; background: #1a1a1a; transition: width 0.3s ease; }
        .nav-links a:hover { color: #1a1a1a; }
        .nav-links a:hover::after { width: 100%; }
        .hero-section { padding: 140px 0 100px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%); position: relative; overflow: hidden; }
        .hero-section::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 30% 20%, rgba(0, 0, 0, 0.03) 0%, transparent 50%), radial-gradient(circle at 70% 80%, rgba(0, 0, 0, 0.03) 0%, transparent 50%); pointer-events: none; }
        .hero-content { display: grid; grid-template-columns: 1fr 500px; gap: 80px; align-items: center; position: relative; z-index: 2; }
        .hero-text h1 { font-size: 64px; font-weight: 900; color: #1a1a1a; margin-bottom: 24px; letter-spacing: -0.03em; line-height: 1.1; }
        .hero-text p { font-size: 20px; color: #4a4a4a; margin-bottom: 40px; max-width: 600px; line-height: 1.7; }
        .hero-image { background: #ffffff; border-radius: 24px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1); border: 1px solid rgba(0, 0, 0, 0.05); overflow: hidden; height: 400px; display: flex; align-items: center; justify-content: center; position: relative; transition: transform 0.3s ease; }
        .hero-image:hover { transform: translateY(-10px); box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15); }
        .placeholder-image { width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: #666; font-size: 24px; font-weight: 600; }
        /* Tambahan untuk section program magang unggulan */
        .programs-section { padding: 80px 0 40px; background: #f8f9fa; }
        .programs-section .section-title { font-size: 36px; font-weight: 800; text-align: center; margin-bottom: 48px; letter-spacing: -0.02em; }
        .programs-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 40px; }
        .program-card { background: #fff; border-radius: 20px; box-shadow: 0 8px 32px rgba(0,0,0,0.07); padding: 40px 32px; display: flex; flex-direction: column; align-items: flex-start; transition: box-shadow 0.3s; }
        .program-card:hover { box-shadow: 0 16px 48px rgba(0,0,0,0.12); }
        .program-title { font-size: 24px; font-weight: 700; margin-bottom: 12px; }
        .program-description { font-size: 16px; color: #555; margin-bottom: 0; }
        @media (max-width: 1024px) { .hero-content { grid-template-columns: 1fr; gap: 60px; text-align: center; } .hero-text h1 { font-size: 48px; } .programs-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 768px) { .container { padding: 0 20px; } .hero-section { padding: 120px 0 80px; } .hero-text h1 { font-size: 36px; } .hero-text p { font-size: 18px; } .programs-grid { grid-template-columns: 1fr; } }
        .marquee-track {
          animation: marquee-left 180s linear infinite;
        }
        @keyframes marquee-left {
          0% { transform: translateX(0); }
          100% { transform: translateX(-50%); }
        }
        /* Testimonial Card Style */
        .testimonial-section {
            background: transparent;
            padding: 64px 0 48px 0;
            margin-top: 0;
            border-radius: 32px;
        }
        .testimonial-section h2 {
            font-size:2.5rem;
            font-weight:700;
            text-align:center;
            color:#fff;
            margin-bottom: 18px;
        }
        /* Hapus animasi marquee dan tampilkan testimonial statis grid */
        .testimonial-section .marquee-track {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            width: 100%;
            animation: none !important;
            justify-items: center;
            justify-content: center;
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
        }
        @media (min-width: 1024px) {
            .testimonial-section .marquee-track {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (min-width: 600px) and (max-width: 1023px) {
            .testimonial-section .marquee-track {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 599px) {
            .testimonial-section .marquee-track {
                grid-template-columns: 1fr;
            }
        }
        @keyframes marquee-left {}
        .testimonial-section .bg-white\/80 {
            background: rgba(255,255,255,0.8);
        }
        .testimonial-section .rounded-xl {
            border-radius: 1rem;
        }
        .testimonial-section .shadow-lg {
            box-shadow: 0 8px 32px 0 rgba(37,99,235,0.10);
        }
        .testimonial-section .border {
            border: 1px solid rgba(255,255,255,0.4);
        }
        .testimonial-section .p-6 {
            padding: 1.5rem;
        }
        .testimonial-section .max-w-sm {
            width: 100%;
            max-width: 600px;
            min-width: 320px;
        }
        .testimonial-section .w-full {
            width: 100%;
        }
        .testimonial-section .flex-shrink-0 {
            flex-shrink: 0;
        }
        .testimonial-section .flex {
            display: flex;
        }
        .testimonial-section .flex-col {
            flex-direction: column;
        }
        .testimonial-section .items-center {
            align-items: center;
        }
        .testimonial-section .text-gray-800 {
            color: #1a202c;
        }
        .testimonial-section .w-16 {
            width: 4rem;
        }
        .testimonial-section .h-16 {
            height: 4rem;
        }
        .testimonial-section .rounded-full {
            border-radius: 9999px;
        }
        .testimonial-section .mb-3 {
            margin-bottom: 0.75rem;
        }
        .testimonial-section .border-2 {
            border-width: 2px;
        }
        .testimonial-section .shadow {
            box-shadow: 0 2px 8px 0 rgba(0,0,0,0.10);
        }
        .testimonial-section .italic {
            font-style: italic;
        }
        .testimonial-section .text-sm {
            font-size: 0.875rem;
        }
        .testimonial-section .text-center {
            text-align: center;
        }
        .testimonial-section .text-gray-700 {
            color: #4a5568;
        }
        .testimonial-section .font-bold {
            font-weight: 700;
        }
        .testimonial-section .text-base {
            font-size: 1rem;
        }
        .testimonial-section .mb-1 {
            margin-bottom: 0.25rem;
        }
        .testimonial-section .text-blue-900 {
            color: #1e3a8a;
        }
        .testimonial-section .text-xs {
            font-size: 0.75rem;
        }
        .testimonial-section .text-gray-500 {
            color: #6b7280;
        }
        @media (max-width: 900px) {
            .testimonial-section .marquee-track {
                gap: 1rem;
            }
            .testimonial-section .max-w-sm {
                max-width: 18rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">Nusantara TV</div>
                <nav class="nav-links">
                    <a href="/">Beranda</a>
                    <a href="#program">Program Magang</a>
                    <a href="#tentang">Tentang</a>
                    <a href="#kontak">Kontak</a>
                </nav>
            </div>
        </div>
    </header>
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>{{ $category->name }}</h1>
                    <p>{{ $category->description ?? 'Deskripsi kategori belum tersedia.' }}</p>
                </div>
                <div class="hero-image" style="display: flex; align-items: center; justify-content: center; padding: 0;">
                    @if($category->photo)
                        <img src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->name }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 24px;">
                    @else
                        <div class="placeholder-image">
                            {{ $category->icon ?? '📺' }} {{ $category->sub_name ?? $category->name }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Section Program Magang Unggulan (dinamis dari subcategory, pakai struktur HTML user) -->
    @if(isset($subcategories) && $subcategories->count())
    <section class="programs-section">
        <div class="container">
            <h2 class="section-title">Program Magang Unggulan</h2>
            <div class="programs-grid">
                @foreach($subcategories as $sub)
                <div class="program-card">
                    <h3 class="program-title">{{ $sub->name }}</h3>
                    <p class="program-description">{{ $sub->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Section Testimonial untuk kategori ini (mengikuti tampilan home.blade.php) -->
    @if(isset($testimonials) && count($testimonials))
    <div class="testimonial-section" id="testimonial" style="background: transparent; padding: 64px 0 48px 0; margin-top: 0; border-radius: 32px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-size:2.5rem; font-weight:700; text-align:center; color:#222; margin-bottom: 18px;">Apa Kata Mereka tentang Program Magang Ini</h2>
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
    @endif
    
</body>
</html> 