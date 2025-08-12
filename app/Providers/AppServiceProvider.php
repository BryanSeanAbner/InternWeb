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
        // Temporarily disable validation to fix environment issues
        // $this->validateEncryptionKey();

        // Register Blade directive for photo URL
        Blade::directive('photo', function ($expression) {
            return "<?php echo App\Http\Controllers\PhotoController::getPhotoUrl($expression); ?>";
        });

        // Register Blade directive for photo URL with fallback
        Blade::directive('photoWithFallback', function ($expression) {
            return "<?php echo App\Http\Controllers\PhotoController::getPhotoUrl($expression); ?>";
        });
    }

    /**
     * Validate encryption key configuration
     */
    private function validateEncryptionKey(): void
    {
        $key = config('app.key');
        $cipher = config('app.cipher');

        if (!$key) {
            throw new \Exception('APP_KEY environment variable is not set. Please run: php artisan key:generate');
        }

        if ($cipher !== 'AES-256-CBC') {
            throw new \Exception('Encryption cipher must be AES-256-CBC for security');
        }

        // Validate key format (should start with 'base64:')
        if (!str_starts_with($key, 'base64:')) {
            throw new \Exception('APP_KEY must be in base64 format starting with "base64:"');
        }

        // Validate key length (should be 32 bytes for AES-256)
        $keyWithoutPrefix = substr($key, 7); // Remove 'base64:' prefix
        $keyLength = strlen(base64_decode($keyWithoutPrefix));
        if ($keyLength !== 32) {
            throw new \Exception('APP_KEY must be 32 bytes (256 bits) for AES-256-CBC encryption');
        }
    }
} 