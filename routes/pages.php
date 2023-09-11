<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// home page routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');


// testimonial page routes
Route::get('/testimonial', function () {
    return view('frontend.testimonial');
})->name('testimonial');