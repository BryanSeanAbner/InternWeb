@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $subcategory->name }}</h1>
            @if($subcategory->description)
                <div class="text-lg text-gray-600 prose prose-lg mx-auto max-w-2xl prose-ol:list-decimal prose-ul:list-disc prose-li:my-1 text-justify">
                    {!! $subcategory->description !!}
                </div>
            @endif
        </div>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <!-- Text Content -->
            <div class="space-y-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tentang {{ $subcategory->name }}</h2>
                    <div class="text-gray-600 leading-relaxed prose prose-gray max-w-none prose-headings:text-gray-800 prose-p:text-gray-600 prose-ul:text-gray-600 prose-ol:text-gray-600 prose-li:text-gray-600 prose-strong:text-gray-800 prose-em:text-gray-700 prose-ol:list-decimal prose-ul:list-disc prose-li:my-1 prose-ol:pl-6 prose-ul:pl-6 text-justify">
                        {!! $subcategory->description ?? 'Deskripsi subkategori akan ditampilkan di sini.' !!}
                    </div>
                </div>

                <!-- Related Posts -->
                @if($posts->count() > 0)
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Berita Terkait</h3>
                    <div class="space-y-4">
                        @foreach($posts->take(3) as $post)
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h4 class="font-semibold text-gray-800">
                                <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-600">
                                    {{ $post->title }}
                                </a>
                            </h4>
                            <p class="text-sm text-gray-500">{{ $post->created_at->format('d M Y') }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Back to Category -->
                @if($subcategory->category)
                <div class="pt-4">
                    <a href="{{ route('categories.show', $subcategory->category->slug) }}" 
                       class="inline-flex items-center text-blue-600 hover:text-blue-800">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Kembali ke {{ $subcategory->category->name }}
                    </a>
                </div>
                @endif
            </div>

            <!-- Image -->
            <div class="flex justify-center">
                <div class="w-80 h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                    <span class="text-gray-500 text-lg">Gambar {{ $subcategory->name }}</span>
                </div>
            </div>
        </div>

        <!-- All Posts in this Subcategory -->
        @if($posts->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Semua Berita {{ $subcategory->name }}</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    @if($post->photo)
                    <div class="h-48 overflow-hidden">
                        <img src="@photo($post->photo)" 
                             alt="{{ $post->title }}" 
                             class="w-full h-full object-cover">
                    </div>
                    @endif
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-2">
                            <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-600">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            {{ Str::limit($post->body, 100) }}
                        </p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>{{ $post->created_at->format('d M Y') }}</span>
                            <span>{{ $post->category ? $post->category->name : 'Uncategorized' }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            @if($posts->hasPages())
            <div class="mt-8">
                {{ $posts->links() }}
            </div>
            @endif
        </div>
        @endif
    </div>
</div>

<style>
/* Custom styling untuk memastikan list dirender dengan benar */
.prose ol {
    list-style-type: decimal !important;
    padding-left: 1.5rem !important;
    margin-left: 0 !important;
}

.prose ul {
    list-style-type: disc !important;
    padding-left: 1.5rem !important;
    margin-left: 0 !important;
}

.prose li {
    margin-bottom: 0.25rem !important;
    display: list-item !important;
}

.prose ol li::marker {
    color: inherit !important;
    font-weight: inherit !important;
}

.prose ul li::marker {
    color: inherit !important;
    font-weight: inherit !important;
}

/* Text justify untuk semua elemen dalam prose */
.prose p {
    text-align: justify !important;
}

.prose li {
    text-align: justify !important;
}
</style>
@endsection 