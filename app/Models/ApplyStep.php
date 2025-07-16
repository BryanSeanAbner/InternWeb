<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyStep extends Model
{
    /** @use HasFactory<\Database\Factories\ApplyStepFactory> */
    use HasFactory;

    protected $fillable = [
        'step_number', 'title', 'description', 'button_text', 'button_link',
    ];
}
