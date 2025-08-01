<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\PhotoController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register Blade directive for photo URL
        Blade::directive('photo', function ($expression) {
            return "<?php echo App\Http\Controllers\PhotoController::getPhotoUrl($expression); ?>";
        });

        // Register Blade directive for photo URL with fallback
        Blade::directive('photoWithFallback', function ($expression) {
            return "<?php echo App\Http\Controllers\PhotoController::getPhotoUrl($expression); ?>";
        });
    }
} 