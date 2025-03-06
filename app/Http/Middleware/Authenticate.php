<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate  {

    public function handle(Request $request, Closure $next): Response{
        
        if (!Auth::check()) {
            if (!$request->expectsJson()) {
                return redirect()->route('loginForm');
            }

            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}