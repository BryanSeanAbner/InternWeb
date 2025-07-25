<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'photo', 'category_id'];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }
} 