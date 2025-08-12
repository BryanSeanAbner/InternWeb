<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\AccountSettingsController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class)->only(['index', 'show']);

// Route untuk AJAX modal detail postingan
Route::get('/posts/{post}/modal', [PostController::class, 'modal'])->name('posts.modal');

// Route untuk subkategori publik
Route::get('/categories/{categorySlug}/{subcategorySlug}', [SubcategoryController::class, 'show'])->name('subcategories.show');

// Admin page, hanya bisa diakses jika sudah login
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('berita', BeritaController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->except(['create', 'store', 'show']);
    
    // Pengaturan Akun
    Route::get('account-settings', [AccountSettingsController::class, 'index'])->name('account-settings.index');
    Route::post('account-settings/verify-password', [AccountSettingsController::class, 'verifyPassword'])->name('account-settings.verify-password')->middleware('throttle:3,1');
    Route::put('account-settings/username', [AccountSettingsController::class, 'updateUsername'])->name('account-settings.update-username')->middleware('throttle:5,1');
    Route::put('account-settings/password', [AccountSettingsController::class, 'updatePassword'])->name('account-settings.update-password')->middleware('throttle:3,1');
    Route::get('subkategori/{kategori}', [App\Http\Controllers\Admin\SubkategoriController::class, 'index'])->name('subkategori.index');
    Route::get('subkategori/{kategori}/create', [App\Http\Controllers\Admin\SubkategoriController::class, 'create'])->name('subkategori.create');
    Route::post('subkategori/{kategori}', [App\Http\Controllers\Admin\SubkategoriController::class, 'store'])->name('subkategori.store');
    Route::get('subkategori/{kategori}/{subcategory}/edit', [App\Http\Controllers\Admin\SubkategoriController::class, 'edit'])->name('subkategori.edit');
    Route::put('subkategori/{kategori}/{subcategory}', [App\Http\Controllers\Admin\SubkategoriController::class, 'update'])->name('subkategori.update');
    Route::delete('subkategori/{kategori}/{subcategory}', [App\Http\Controllers\Admin\SubkategoriController::class, 'destroy'])->name('subkategori.destroy');
});

// Route kategori by slug
Route::get('categories/{slug}', [App\Http\Controllers\Admin\KategoriController::class, 'show'])->name('categories.show');
// Route store kategori
Route::post('categories', [App\Http\Controllers\Admin\KategoriController::class, 'store'])->name('categories.store');

Route::resource('categories.subcategories', App\Http\Controllers\Admin\SubkategoriController::class)->except(['show']);

Route::get('/form', function () {
    return view('form');
})->name('form');

// Untuk tampilkan halaman form
Route::get('/form', function () {
    return view('form'); // ini harus sesuai nama file form.blade.php
})->name('form');

// Untuk proses saat form di-submit
Route::post('/form-submit', function () {
    // sementara, tes saja apakah berhasil sampai sini
    return 'Form berhasil dikirim!';
})->name('form.submit');

require __DIR__.'/auth.php';