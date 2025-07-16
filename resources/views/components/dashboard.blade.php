<div class="container mx-auto py-8">
    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold mb-2">
            Mulai karirmu di Dunia Broadcasting bersama Nusantara TV
        </h1>
        <p class="text-lg text-gray-600">
            Website Manajemen Program Internship Nusantara TV
        </p>
    </div>

    <!-- Berita Kegiatan Magang -->
    <div class="mb-8">
        <h2 class="text-xl font-bold mb-4 text-center">Berita Kegiatan Magang</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-4">
            @foreach($latestPosts ?? [] as $post)
                <div class="bg-white rounded-lg shadow border p-6 flex flex-col justify-between transition hover:shadow-lg">
                    <div class="flex justify-between items-center mb-2">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold"
                              style="background:{{ $post->category->color ?? '#eee' }}20; color:{{ $post->category->color ?? '#333' }}">
                            {{ $post->category->name ?? '-' }}
                        </span>
                        <span class="text-xs text-gray-500">
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <div class="mb-2">
                        <h2 class="text-lg font-bold mb-1">{{ $post->title }}</h2>
                        <p class="text-gray-500 leading-relaxed">
                            {{ Str::limit(strip_tags($post->body), 100) }}
                        </p>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center gap-2">
                            @if($post->author && $post->author->profile_photo_url ?? false)
                                <img src="{{ $post->author->profile_photo_url }}" 
                                     alt="{{ $post->author->name }}" 
                                     class="w-8 h-8 rounded-full object-cover">
                            @else
                                <span class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs text-gray-400">?</span>
                            @endif
                            <span class="font-semibold">{{ $post->author->name ?? '-' }}</span>
                        </div>
                        <a href="{{ route('posts.show', $post) }}" 
                           class="text-blue-600 font-semibold flex items-center gap-1 hover:underline">
                            Read more <span>&rarr;</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('posts.index') }}" 
               class="inline-block bg-blue-500 text-white px-6 py-2 rounded font-bold hover:bg-blue-600 transition">
                See more
            </a>
        </div>
    </div>

    <!-- Tentang Program Internship -->
    <div class="bg-white rounded shadow p-6 mb-8">
        <h2 class="text-xl font-semibold mb-2">Tentang Program Internship</h2>
        <p class="mb-2">
            Program internship Nusantara TV adalah kesempatan bagi mahasiswa dan fresh graduate untuk belajar langsung di industri penyiaran dan media kreatif.
        </p>
        <ul class="list-disc ml-6 mb-2">
            <li><b>Tujuan:</b> Memberikan pengalaman kerja nyata di dunia broadcasting.</li>
            <li><b>Durasi:</b> 3–6 bulan (fleksibel sesuai kebutuhan kampus/individu).</li>
            <li><b>Kategori Magang:</b> Remote / On Site</li>
            <li><b>Syarat & Ketentuan:</b> Mahasiswa aktif/fresh graduate, CV, surat pengantar kampus (jika ada), komitmen mengikuti program sampai selesai.</li>
        </ul>
        <a href="https://bit.ly/daftarmagang-nusatv" 
           target="_blank" 
           class="bg-green-500 text-white px-6 py-2 rounded font-bold inline-block mt-2">
            Daftar Sekarang
        </a>
    </div>

    <!-- Navigasi Tambahan -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <a href="{{ route('categories.index') }}" 
           class="block bg-yellow-100 p-4 rounded shadow hover:bg-yellow-200 text-center">
            <div class="text-xl font-bold mb-2">Bidang Magang</div>
            <div>Lihat daftar bidang magang yang tersedia</div>
        </a>
        <a href="{{ route('testimonials.index') }}" 
           class="block bg-green-100 p-4 rounded shadow hover:bg-green-200 text-center">
            <div class="text-xl font-bold mb-2">Testimoni Alumni</div>
            <div>Baca pengalaman alumni internship</div>
        </a>
    </div>

    <!-- Kontak & Sosial Media -->
    <div class="bg-gray-100 rounded p-4 text-center">
        <h3 class="text-lg font-semibold mb-1">Kontak & Sosial Media</h3>
        <div>Alamat: Jl. Contoh No. 123, Jakarta</div>
        <div>Email: magang@nusatv.com</div>
        <div>Telepon: 0812-3456-7890</div>
        <div>Instagram: 
            <a href="https://instagram.com/nusatv" 
               target="_blank" 
               class="text-blue-600">@nusatv</a>
        </div>
        <div>YouTube: 
            <a href="https://youtube.com/nusatv" 
               target="_blank" 
               class="text-blue-600">Nusantara TV</a>
        </div>
    </div>
</div>
