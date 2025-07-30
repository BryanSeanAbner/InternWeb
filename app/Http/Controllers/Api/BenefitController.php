<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InternshipBenefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    public function index()
    {
        $benefits = InternshipBenefit::all();
        
        return response()->json([
            'success' => true,
            'data' => $benefits
        ]);
    }
} 