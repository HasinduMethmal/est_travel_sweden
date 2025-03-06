<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{

    public function showLoginForm()
    {
        // Check if the user is already authenticated and is an admin
        if (Auth::check() && Auth::user()->is_admin === true) {
            // Redirect to the dashboard if the user is authenticated and is an admin
            return redirect()->route('dashboard.index');
        }
        
        // Show the login form if the user is not authenticated
        return view('auth.login');
    }
    


    public function showSignupForm(){

        return view('auth.signup');
    }


    public function register(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5|confirmed',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('loginForm')->with('message', 'Account created successfully.');
    }



    public function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard.index'))->with('message', 'Welcome ' . Auth::user()->name);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('loginForm')->with('message', 'Successfully logged out!');
    }
}
