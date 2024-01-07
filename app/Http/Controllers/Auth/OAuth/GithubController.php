<?php

namespace App\Http\Controllers\Auth\OAuth;

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
        $user = Socialite::driver('github')->user();
        dd($user, $user);

        // OAuth 2.0 providers...
        $token = $user->token;
        $refreshToken = $user->refreshToken;
        $expiresIn = $user->expiresIn;

        // OAuth 1.0 providers...
        $token = $user->token;
        $tokenSecret = $user->tokenSecret;

        // All providers...
        $user->getId();
        $user->getNickname();
        $user->getName();
        $user->getEmail();
        $user->getAvatar();

        $user = User::updateOrCreate([
            'github_id' => $user->id,
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'github_token' => $user->token,
            'github_refresh_token' => $user->refreshToken,
        ]);

        Auth::login($user);

        // return redirect('/dashboard');
    }
}
