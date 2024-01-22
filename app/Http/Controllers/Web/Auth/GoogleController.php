<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $social_user = Socialite::driver('google')->user();

        $user = User::where('google_id', $social_user->id)->first() ?? new User();
        $user->google_id = $social_user->id;
        $user->email = $social_user->email;
        $user->name = $social_user->name;
        $user->nickname = $social_user->nickname;
        $user->avatar = $social_user->avatar;
        $user->google_token = $social_user->token;
        $user->google_refresh_token = $social_user->refreshToken;
        $user->google_expires_in = $social_user->expiresIn;
        $user->google_token_secret = $social_user->tokenSecret;
        $user->save();

        Auth::login($user);

        return to_route('web.home');
    }
}
