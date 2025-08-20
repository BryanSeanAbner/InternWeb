<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - Nusantara TV</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        :root {
            --primary-black: #000000;
            --secondary-black: #1a1a1a;
            --accent-gray: #333333;
            --light-gray: #666666;
            --border-gray: #e0e0e0;
            --background-gray: #f8f9fa;
            --white: #ffffff;
        }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--background-gray);
            color: var(--accent-gray);
            margin: 0;
        }
        .header {
            background: var(--primary-black);
            color: var(--white);
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 24px;
            height: 80px;
        }
        .logo {
            font-size: 32px;
            font-weight: 900;
            letter-spacing: -2px;
            background: linear-gradient(135deg, #fff 0%, #ccc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .logo-tagline {
            font-size: 11px;
            color: #999;
            font-weight: 400;
            letter-spacing: 2px;
            margin-top: 4px;
        }
        .nav {
            display: flex;
            gap: 40px;
        }
        .nav a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
            padding: 8px 0;
        }
        .nav a:hover {
            color: #ccc;
        }
        .nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--white);
            transition: width 0.3s ease;
        }
        .nav a:hover::after {
            width: 100%;
        }
        .search-container {
            position: relative;
        }
        .search-input {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: var(--white);
            padding: 10px 40px 10px 16px;
            border-radius: 25px;
            font-size: 14px;
            width: 280px;
            transition: all 0.3s ease;
        }
        .search-input:focus {
            outline: none;
            background: rgba(255,255,255,0.15);
            border-color: rgba(255,255,255,0.4);
        }
        .search-input::placeholder {
            color: rgba(255,255,255,0.6);
        }
        .main-content {
            max-width: 1400px;
            margin: 40px auto 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }
        .featured-image {
            width: 100%;
            height: 350px;
            background: var(--background-gray);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light-gray);
            font-size: 20px;
            position: relative;
            overflow: hidden;
            margin-bottom: 32px;
        }
        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 18px;
        }
        .side-articles {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .side-article {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
            transition: all 0.3s ease;
            padding: 20px;
        }
        .side-article-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary-black);
            line-height: 1.4;
            margin-bottom: 8px;
        }
        .side-article-meta {
            font-size: 12px;
            color: var(--light-gray);
            margin-bottom: 12px;
        }
        .side-article-excerpt {
            font-size: 14px;
            color: var(--accent-gray);
            line-height: 1.5;
        }
        .detail-content {
            background: var(--white);
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
            padding: 40px 32px;
        }
        .detail-category {
            background: var(--primary-black);
            color: var(--white);
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 18px;
        }
        .detail-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: #1a1a1a;
            margin-bottom: 18px;
            line-height: 1.15;
        }
        .detail-meta {
            display: flex;
            gap: 20px;
            font-size: 15px;
            color: var(--light-gray);
            margin-bottom: 20px;
        }
        .detail-body {
            font-size: 1.15rem;
            color: #333;
            line-height: 1.7;
        }
        @media (max-width: 1024px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 0;
            }
            .side-articles {
                flex-direction: row;
                gap: 16px;
            }
        }
        @media (max-width: 768px) {
            .header-content { flex-direction: column; gap: 20px; height: auto; }
            .main-content { padding: 0 8px; }
            .detail-content { padding: 20px 8px; }
            .featured-image { height: 180px; }
            .detail-title { font-size: 1.3rem; }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div>
                <div class="logo">NUSANTARA TV</div>
                <div class="logo-tagline">PROFESSIONAL MEDIA NETWORK</div>
            </div>
            <nav class="nav">
                <a href="/">Home</a>
                <a href="/posts">News</a>
                <a href="#internships">Internships</a>
                <a href="#programs">Programs</a>
                <a href="#about">About</a>
            </nav>
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search news, articles...">
            </div>
        </div>
    </header>
    <main class="main-content">
        <div>
            <div class="featured-image">
                @if($post->photo)
                    <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}">
                @else
                    FEATURED STORY IMAGE
                @endif
            </div>
            <div class="detail-content">
                <div class="detail-category">
                    {{ $post->category->name ?? 'Uncategorized' }}
                </div>
                <h1 class="detail-title">{{ $post->title }}</h1>
                <div class="detail-meta">
                    <span>By Editorial Team</span>
                    <span>{{ $post->created_at->format('F d, Y') }}</span>
                    <span>8 min read</span>
                </div>
                <div class="detail-body">{!! nl2br(e($post->body)) !!}</div>
            </div>
        </div>
        <aside>
            <div style="font-size: 1.5rem; font-weight: 700; margin-bottom: 18px; color: #222;">Berita yang serupa dengan bidang ini</div>
            <div class="side-articles">
                @forelse($sidePosts as $side)
                    <div class="side-article">
                        <div class="side-article-image" style="width:100%;height:120px;background:#f3f4f6;display:flex;align-items:center;justify-content:center;color:#888;font-size:13px;margin-bottom:10px;border-radius:8px;overflow:hidden;">
                            @if($side->photo)
                                <img src="{{ asset('storage/' . $side->photo) }}" alt="{{ $side->title }}" style="width:100%;height:100%;object-fit:cover;">
                            @else
                                IMAGE
                            @endif
                        </div>
                        <div class="side-article-title">{{ $side->title }}</div>
                        <div class="side-article-meta">{{ $side->created_at->format('F d, Y') }}</div>
                        <div class="side-article-excerpt">{{ Str::limit(strip_tags($side->body), 100) }}</div>
                    </div>
                @empty
                    <div style="color:#888;">Tidak ada berita serupa.</div>
                @endforelse
            </div>
        </aside>
    </main>
</body>
</html>
