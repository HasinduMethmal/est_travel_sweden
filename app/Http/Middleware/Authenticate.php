<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate {

    public function handle(Request $request, Closure $next): Response {
        // Check if the user is authenticated
        if (!Auth::check()) {
            if (!$request->expectsJson()) {
                return redirect()->route('loginForm'); // Redirect to the login page if not authenticated
            }
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Check for session expiration
        $sessionLifetime = config('session.lifetime') * 60; // Convert minutes to seconds
        $lastActivityTime = session('last_activity_time', time()); // Fallback to current time if not set

        // If session has expired based on the lifetime
        if (time() - $lastActivityTime > $sessionLifetime) {
            Auth::logout(); // Log the user out
            session()->invalidate(); // Invalidate the session
            session()->regenerateToken(); // Regenerate CSRF token
            session()->flush(); // Optional: Clear all session data

            if (!$request->expectsJson()) {
                return redirect()->route('loginForm')->with('message', 'Your session has expired. Please log in again.');
            }

            return response()->json(['error' => 'Session expired, please log in again.'], 401);
        }

        // Update last activity time for the user session
        session(['last_activity_time' => time()]);

        // Proceed with the next request
        return $next($request);
    }
}
