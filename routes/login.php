<?php

use App\Http\Controllers\LoginWithGoogleController;
use Illuminate\Support\Facades\Route;

// login with google

Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);
