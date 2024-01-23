<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebAuthController extends Controller
{
    public function home()
    {
        return view('web.pages.home');
    }
    public function login()
    {
        return view('web.auth.login');
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
        return to_route('auth.web.login');
    }
}
