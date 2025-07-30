<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AddSecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Remove restrictive CSP for development/production
        $response->headers->remove('Content-Security-Policy');
        
        // Add more permissive CSP
        $response->headers->set('Content-Security-Policy', "default-src 'self' 'unsafe-inline' 'unsafe-eval' data: blob:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: blob:; script-src 'self' 'unsafe-inline' 'unsafe-eval';");

        return $response;
    }
} 