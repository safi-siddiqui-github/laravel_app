<?php

namespace App\Http\Controllers\Web\Auth\OAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $social_user = Socialite::driver('github')->user();

        // $user = User::where('github_id', $social_user->id)->first() ?? new User();

        // $user->github_id = $social_user->id;
        // $user->email = $social_user->email;
        // $user->name = $social_user->name;
        // $user->nickname = $social_user->nickname;
        // $user->avatar = $social_user->avatar;
        // $user->github_token = $social_user->token;
        // $user->github_refresh_token = $social_user->refreshToken;
        // $user->github_expires_in = $social_user->expiresIn;
        // $user->github_token_secret = $social_user->tokenSecret;

        // $user->save();

        // Auth::login($social_user);

        return to_route('auth.github.dashboard');
    }

    public function dashboard(Request $request)
    {
        // $user = $request->user();
        return view('github.dashboard');
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('welcome');
    }
}
