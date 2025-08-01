<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use App\Models\Category;
use App\Models\Testimonial;

class PhotoController extends Controller
{
    /**
     * Get photo by ID and type
     */
    public function getPhoto($type, $id)
    {
        try {
            switch ($type) {
                case 'post':
                    $item = Post::findOrFail($id);
                    break;
                case 'category':
                    $item = Category::findOrFail($id);
                    break;
                case 'testimonial':
                    $item = Testimonial::findOrFail($id);
                    break;
                default:
                    return $this->getPlaceholder();
            }

            if (!$item->photo) {
                return $this->getPlaceholder();
            }

            // If photo is base64, return it directly
            if (str_starts_with($item->photo, 'data:image/')) {
                $base64Data = $item->photo;
                $mimeType = $this->getMimeTypeFromBase64($base64Data);
                
                return response($this->getBase64Data($base64Data))
                    ->header('Content-Type', $mimeType)
                    ->header('Cache-Control', 'public, max-age=31536000');
            }

            // If photo is file path, check if exists
            if (file_exists(storage_path('app/public/' . $item->photo))) {
                $path = storage_path('app/public/' . $item->photo);
                $mimeType = mime_content_type($path);
                
                return response(file_get_contents($path))
                    ->header('Content-Type', $mimeType)
                    ->header('Cache-Control', 'public, max-age=31536000');
            }

            return $this->getPlaceholder();

        } catch (\Exception $e) {
            return $this->getPlaceholder();
        }
    }

    /**
     * Get photo URL for Blade directive
     */
    public static function getPhotoUrl($photoData, $type = 'general')
    {
        if (empty($photoData)) {
            return self::getPlaceholderUrl($type);
        }

        // If photo is base64, return it directly
        if (str_starts_with($photoData, 'data:image/')) {
            return $photoData;
        }

        // If photo is file path, check if exists
        if (file_exists(storage_path('app/public/' . $photoData))) {
            return asset('storage/' . $photoData);
        }

        return self::getPlaceholderUrl($type);
    }

    /**
     * Get placeholder URL
     */
    private static function getPlaceholderUrl($type)
    {
        return 'data:image/svg+xml;base64,' . base64_encode('<svg width="400" height="300" xmlns="http://www.w3.org/2000/svg"><rect width="400" height="300" fill="#f3f4f6"/><text x="200" y="150" text-anchor="middle" font-family="Arial, sans-serif" font-size="24" fill="#6b7280" font-weight="bold">IMAGE</text></svg>');
    }

    /**
     * Get placeholder response
     */
    private function getPlaceholder()
    {
        $svg = '<svg width="400" height="300" xmlns="http://www.w3.org/2000/svg"><rect width="400" height="300" fill="#f3f4f6"/><text x="200" y="150" text-anchor="middle" font-family="Arial, sans-serif" font-size="24" fill="#6b7280" font-weight="bold">IMAGE</text></svg>';
        
        return response($svg)
            ->header('Content-Type', 'image/svg+xml')
            ->header('Cache-Control', 'public, max-age=31536000');
    }

    /**
     * Get mime type from base64
     */
    private function getMimeTypeFromBase64($base64Data)
    {
        if (preg_match('/^data:([^;]+);base64,/', $base64Data, $matches)) {
            return $matches[1];
        }
        return 'image/jpeg';
    }

    /**
     * Get base64 data without header
     */
    private function getBase64Data($base64Data)
    {
        return base64_decode(preg_replace('/^data:([^;]+);base64,/', '', $base64Data));
    }
}
