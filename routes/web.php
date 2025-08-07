<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordHistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\AccountController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return redirect()->route('admin.account.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/password-history', [PasswordHistoryController::class, 'index'])->name('password.history');
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
    Route::get('account', [AccountController::class, 'index'])->name('account.index');
    Route::post('account', [AccountController::class, 'index'])->name('account.index.post');
    Route::post('account/change-password', [AccountController::class, 'changePassword'])->name('account.change-password');
    Route::post('account/change-username', [AccountController::class, 'changeUsername'])->name('account.change-username');



    Route::get('subkategori/{kategori}', [App\Http\Controllers\Admin\SubkategoriController::class, 'index'])->name('subkategori.index');
    Route::get('subkategori/{kategori}/create', [App\Http\Controllers\Admin\SubkategoriController::class, 'create'])->name('subkategori.create');
    Route::post('subkategori/{kategori}', [App\Http\Controllers\Admin\SubkategoriController::class, 'store'])->name('subkategori.store');
    Route::get('subkategori/{kategori}/{subcategory}/edit', [App\Http\Controllers\Admin\SubkategoriController::class, 'edit'])->name('subkategori.edit');
    Route::put('subkategori/{kategori}/{subcategory}', [App\Http\Controllers\Admin\SubkategoriController::class, 'update'])->name('subkategori.update');
    Route::delete('subkategori/{kategori}/{subcategory}', [App\Http\Controllers\Admin\SubkategoriController::class, 'destroy'])->name('subkategori.destroy');
});

// Route kategori
Route::resource('categories', App\Http\Controllers\Admin\KategoriController::class)->only(['show']);
// Route kategori by slug
Route::get('categories/{slug}', [App\Http\Controllers\Admin\KategoriController::class, 'show'])->name('categories.show');
// Route store kategori
Route::post('categories', [App\Http\Controllers\Admin\KategoriController::class, 'store'])->name('categories.store');

Route::resource('categories.subcategories', App\Http\Controllers\Admin\SubkategoriController::class)->except(['show']);

require __DIR__.'/auth.php';