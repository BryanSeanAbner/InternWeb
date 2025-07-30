<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index()
    {
        $requirements = Requirement::all();
        
        return response()->json([
            'success' => true,
            'data' => $requirements
        ]);
    }
} 