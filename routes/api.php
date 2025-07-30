<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\BenefitController;
use App\Http\Controllers\Api\RequirementController;
use App\Http\Controllers\Api\ApplyStepController;
use App\Http\Controllers\Api\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public API Routes
Route::prefix('v1')->group(function () {
    // Home page data
    Route::get('/home', [HomeController::class, 'index']);
    
    // Posts/Berita
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
    Route::get('/posts/latest', [PostController::class, 'latest']);
    
    // Categories
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{category}', [CategoryController::class, 'show']);
    
    // Testimonials
    Route::get('/testimonials', [TestimonialController::class, 'index']);
    
    // Benefits
    Route::get('/benefits', [BenefitController::class, 'index']);
    
    // Requirements
    Route::get('/requirements', [RequirementController::class, 'index']);
    
    // Apply Steps
    Route::get('/apply-steps', [ApplyStepController::class, 'index']);
}); 