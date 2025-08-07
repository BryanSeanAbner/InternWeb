@extends('layouts.admin')
@section('admin-title', 'Dashboard')
@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Selamat Datang di Dashboard Admin</h2>
        <p class="text-gray-600">Kelola konten website Nusantara TV dengan mudah</p>
    </div>

    <!-- Info Box -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
        <div class="flex items-start">
            <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
            <div class="text-sm text-blue-800">
                <p class="font-medium mb-1">Ketentuan Dashboard Admin:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>Dashboard menampilkan statistik konten website</li>
                    <li>Gunakan menu di sidebar untuk navigasi</li>
                    <li>Semua perubahan akan langsung tersimpan</li>
                    <li>Pastikan untuk logout setelah selesai</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Statistik Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Total Berita -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm font-medium">Total Berita</p>
                    <p class="text-3xl font-bold">{{ $totalBerita }}</p>
                </div>
                <div class="bg-blue-400 rounded-full p-3">
                    <i class="fa-solid fa-newspaper text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Kategori -->
        <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-green-100 text-sm font-medium">Total Kategori</p>
                    <p class="text-3xl font-bold">{{ $totalKategori }}</p>
                </div>
                <div class="bg-green-400 rounded-full p-3">
                    <i class="fa-solid fa-list text-2xl"></i>
                </div>
            </div>
        </div>

        <!-- Total Testimoni -->
        <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-100 text-sm font-medium">Total Testimoni</p>
                    <p class="text-3xl font-bold">{{ $totalTestimoni }}</p>
                </div>
                <div class="bg-purple-400 rounded-full p-3">
                    <i class="fa-solid fa-comments text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Sections -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Berita Terbaru -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold text-gray-800">Berita Terbaru</h3>
                <a href="{{ route('admin.berita.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                    Lihat Semua →
                </a>
            </div>
            <div class="space-y-3">
                @forelse($beritaTerbaru as $berita)
                    <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-800">{{ Str::limit($berita->title, 40) }}</h4>
                            <p class="text-sm text-gray-500">{{ $berita->category ? $berita->category->name : 'Uncategorized' }} • {{ $berita->created_at->format('d M Y') }}</p>
                        </div>
                        <a href="{{ route('admin.berita.edit', $berita) }}" class="text-blue-600 hover:text-blue-800">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">Belum ada berita</p>
                @endforelse
            </div>
        </div>

        <!-- Kategori Populer -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold text-gray-800">Kategori Populer</h3>
                <a href="{{ route('admin.kategori.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                    Lihat Semua →
                </a>
            </div>
            <div class="space-y-3">
                @forelse($kategoriPopuler as $kategori)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 rounded-full" style="background-color: {{ $kategori->color }}"></div>
                            <span class="font-medium text-gray-800">{{ $kategori->name }}</span>
                        </div>
                        <span class="text-sm text-gray-500">{{ $kategori->posts_count }} berita</span>
                    </div>
                @empty
                    <p class="text-gray-500 text-center py-4">Belum ada kategori</p>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Aksi Cepat</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('admin.berita.create') }}" class="flex items-center space-x-3 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                <i class="fa-solid fa-plus text-blue-600"></i>
                <span class="font-medium text-blue-800">Tambah Berita</span>
            </a>
            <a href="{{ route('admin.kategori.create') }}" class="flex items-center space-x-3 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                <i class="fa-solid fa-plus text-green-600"></i>
                <span class="font-medium text-green-800">Tambah Kategori</span>
            </a>
            <a href="{{ route('admin.testimonials.create') }}" class="flex items-center space-x-3 p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                <i class="fa-solid fa-plus text-purple-600"></i>
                <span class="font-medium text-purple-800">Tambah Testimoni</span>
            </a>
        </div>
    </div>
</div>

<script>
// Admin dashboard validation
document.addEventListener('DOMContentLoaded', function() {
    // Add confirmation for delete actions
    document.querySelectorAll('a[href*="delete"], a[href*="destroy"]').forEach(link => {
        link.addEventListener('click', function(e) {
            if (!confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                e.preventDefault();
            }
        });
    });

    // Add confirmation for logout
    document.querySelectorAll('a[href*="logout"]').forEach(link => {
        link.addEventListener('click', function(e) {
            if (!confirm('Apakah Anda yakin ingin keluar dari aplikasi?')) {
                e.preventDefault();
            }
        });
    });

    // Add tooltips for better UX
    document.querySelectorAll('[title]').forEach(element => {
        element.addEventListener('mouseenter', function() {
            const tooltip = document.createElement('div');
            tooltip.className = 'absolute z-50 px-2 py-1 text-sm text-white bg-gray-900 rounded shadow-lg';
            tooltip.textContent = this.title;
            tooltip.style.left = this.offsetLeft + 'px';
            tooltip.style.top = (this.offsetTop - 30) + 'px';
            document.body.appendChild(tooltip);
            
            this.addEventListener('mouseleave', function() {
                tooltip.remove();
            });
        });
    });
});
</script>
@endsection 