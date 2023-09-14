<?php

use App\Http\Controllers\FacebookController;
use App\Http\Controllers\LoginWithGoogleController;
use Illuminate\Support\Facades\Route;

// login with google routes
Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

// login with facebook routes
Route::controller(FacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});
