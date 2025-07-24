<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\TestimonialController;

Route::get('/', function () {
    return view('home');
});

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

// Admin page, hanya bisa diakses jika sudah login
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('berita', BeritaController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->except(['create', 'store', 'show']);
    Route::get('subkategori/{kategori}', [App\Http\Controllers\Admin\SubkategoriController::class, 'index'])->name('subkategori.index');
    Route::get('subkategori/{kategori}/create', [App\Http\Controllers\Admin\SubkategoriController::class, 'create'])->name('subkategori.create');
    Route::post('subkategori/{kategori}', [App\Http\Controllers\Admin\SubkategoriController::class, 'store'])->name('subkategori.store');
    Route::get('subkategori/{kategori}/{subkategori}/edit', [App\Http\Controllers\Admin\SubkategoriController::class, 'edit'])->name('subkategori.edit');
    Route::put('subkategori/{kategori}/{subkategori}', [App\Http\Controllers\Admin\SubkategoriController::class, 'update'])->name('subkategori.update');
    Route::delete('subkategori/{kategori}/{subkategori}', [App\Http\Controllers\Admin\SubkategoriController::class, 'destroy'])->name('subkategori.destroy');
});

// Route kategori
Route::resource('categories', App\Http\Controllers\Admin\KategoriController::class)->only(['show']);
// Route kategori by slug
Route::get('categories/{slug}', [App\Http\Controllers\Admin\KategoriController::class, 'show'])->name('categories.show');
// Route store kategori
Route::post('categories', [App\Http\Controllers\Admin\KategoriController::class, 'store'])->name('categories.store');

Route::resource('categories.subcategories', App\Http\Controllers\Admin\SubkategoriController::class)->except(['show']);

require __DIR__.'/auth.php';