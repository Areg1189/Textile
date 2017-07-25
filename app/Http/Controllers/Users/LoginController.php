<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
//use Kozz\Laravel\Facades\Guzzle;
use Kozz\Laravel\Providers\Guzzle;
use GuzzleHttp;


class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider(Request $request)
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {
        $client = new GuzzleHttp\Client();
        $user = Socialite::driver('facebook')->user();
dd($user);
        // $user->token;
    }
}
