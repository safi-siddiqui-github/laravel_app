<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class WebController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
    }
    
    public function login()
    {
        return Inertia::render('Login');
        // return view('web.login');
    }

    public function login_guest()
    {
        $user = User::where('email', 'lara-guest@gmail.com')->first();
        Auth::login($user);
        return to_route('web.home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('web.login');
    }

    public function notes()
    {
        return view('web.notes');
    }
}
