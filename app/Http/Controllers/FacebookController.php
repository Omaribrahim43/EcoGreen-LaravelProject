<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('facebook_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);

                return redirect()->route('index');

            // } else if ($finduser == null) {
            //     toastr('this email is already registered with other social media account.', 'error');
            //     return redirect()->route('login');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'facebook_id' => $user->id,
                ]);

                Auth::login($newUser);

                return redirect()->route('index');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
