<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Profile2Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AllProjectController;
use App\Http\Controllers\SingelProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.home.home');
// });


Route::get('/about', function () {
    return view('frontend.about.about');
});

// Route::get('/sara', function () {
//     return view('sara');
// });

// *******************Sara**********************

Route::get('/projects', [AllProjectController::class, 'show'])->name('projects');
Route::get('/projects', [AllProjectController::class, 'show'])->name('projects');






// ----------singelproject----------
// Route::get('/', [SingelProjectController::class, 'showDonation']);
// Route::get('/Item_Project.singelProject', [SingelProjectController::class, 'showitem']);
// Route::get('/service_project.singelProject', [SingelProjectController::class, 'showservice']);

// Route::post('/service.form', [SingelProjectController::class, 'checkformservice']);
// Route::post('/item.form', [SingelProjectController::class, 'checkformitem']);
// Route::post('/Donation.form', [SingelProjectController::class, 'checkformDonation']);


// Route::post('/Donation.storeform', [SingelProjectController::class, 'storeformDonation'])->name('DFS');
// Route::post('/item.storeform', [SingelProjectController::class, 'storeformitem'])->name('IFS');
// Route::post('/service.storeform', [SingelProjectController::class, 'storeformservice'])->name('SFS');




// ----------singelproject----------
Route::get('/Donation.singelProject/{id}', [SingelProjectController::class, 'showDonation'])->name('show.Donation');
Route::get('/Item_Project.singelProject/{id}', [SingelProjectController::class, 'showitem'])->name('show.item');
Route::get('/service_project.singelProject/{id}', [SingelProjectController::class, 'showservice'])->name('show.service');

Route::post('/service.form', [SingelProjectController::class, 'checkformservice'])->name('form.service');
Route::post('/item.form', [SingelProjectController::class, 'checkformitem'])->name('form.item');
Route::post('/form.Donation', [SingelProjectController::class, 'checkformDonation'])->name('Donation.form');

// Route::get('/fDonation', [SingelProjectController::class, 'showDonation'])->name('SD');


Route::get('/Donation.storeform/{id}', [SingelProjectController::class, 'storeformDonation'])->name('store.donation');
Route::get('/item.storeform/{id}', [SingelProjectController::class, 'storeformitem'])->name('store.item');
Route::get('/service.storeform/{id}', [SingelProjectController::class, 'storeformservice'])->name('sorte.service');








