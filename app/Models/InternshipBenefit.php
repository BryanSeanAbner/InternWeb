<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipBenefit extends Model
{
    /** @use HasFactory<\Database\Factories\InternshipBenefitFactory> */
    use HasFactory;

    protected $fillable = [
        'icon', 'title', 'description',
    ];
}
