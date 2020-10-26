<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class SocialLoginController extends Controller
{
    //
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginByFacebook()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();

        if (!$facebookUser) {
            return redirect()->route('homepage');
        }

        $systemUser = User::where('facebook_id', $facebookUser->id)->first();

        if (!$systemUser) {
            $systemUser = User::create([
                'facebook_id' => $facebookUser->id,
                'name' => 'fb_' . $facebookUser->id,
                'email' => $facebookUser->email,
                'address' => 'tokyo',
                'age' => '26',
                'phone' => '123456789',
                'class' => '2'
            ]);
        }

        Auth::loginUsingId($systemUser->id);

        return redirect()->to('home');
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginByGoogle()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        if (!$googleUser) {
            return redirect()->route('homepage');
        }

        $systemUser = User::where('google_id', $googleUser->id)->first();

        if (!$systemUser) {
            $systemUser = User::create([
                'google_id' => $googleUser->id,
                'name' => 'gg_' . $googleUser->id,
                'email' => $googleUser->email,
                'address' => 'tokyo',
                'age' => '26',
                'phone' => '123456789',
                'class' => '2'
            ]);
        }

        Auth::loginUsingId($systemUser->id);

        return redirect()->to('home');
    }
}
