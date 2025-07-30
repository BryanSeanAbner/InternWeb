<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApplyStep;
use Illuminate\Http\Request;

class ApplyStepController extends Controller
{
    public function index()
    {
        $applySteps = ApplyStep::orderBy('step_number')->get();
        
        return response()->json([
            'success' => true,
            'data' => $applySteps
        ]);
    }
} 