<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('user/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);


//*******************Rania********************* */
Route::get('/home', [CategoryController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/aboutus', [AboutUsController::class, 'home'])->name('home');
//*******************Rania********************* */

// Route::get('/pay', function () {
//     return view('frontend.home.paybal');});
 // Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
 // Route::get('cancel', [PayPalController::class, 'payment'])->name('payment.cancel');
 // Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');


