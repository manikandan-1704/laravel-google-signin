<?php

namespace Manikandan1704\LaravelGoogleLogin\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        
        // Handle the user information here (e.g., create or login the user)
        
        return Redirect::route('home');
    }
}
