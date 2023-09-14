<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginWithGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser && $finduser != null) {

                Auth::login($finduser);

                return redirect()->route('index');
            // } else if ($finduser == null) {
            //     toastr('this email is already registered with other social media account.', 'error');
            //     return redirect()->route('login');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                ]);

                Auth::login($newUser);

                return redirect()->route('index');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
