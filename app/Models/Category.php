<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'photo',
        'is_required',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    /**
     * Get categories that can be used as internship fields (categories displayed on home)
     */
    public function scopeInternshipFields($query)
    {
        return $query->where('is_required', true);
    }

    /**
     * Get all internship field categories
     */
    public static function getInternshipFields()
    {
        return static::internshipFields()->orderBy('name')->get();
    }
} 