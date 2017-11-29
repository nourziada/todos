<?php

namespace App\Http\Controllers;


use Socialite;

class AuthSocialMidea extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }



    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        dd($user);


    }
}
