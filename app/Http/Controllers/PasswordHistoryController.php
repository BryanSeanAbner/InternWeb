<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PasswordHistoryController extends Controller
{
    /**
     * Display the password history for the authenticated user.
     */
    public function index(Request $request): View
    {
        $user = $request->user();
        $passwordHistories = $user->passwordHistories()->orderBy('created_at', 'desc')->get();

        return view('profile.password-history', [
            'user' => $user,
            'passwordHistories' => $passwordHistories,
        ]);
    }
}
