<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Profile2Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminLoginController;
use App\Models\User;

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


// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile2', function () {
    return view('frontend.profile2.profile');
})->name('profile2');

Route::get('/certificate/download', [Profile2Controller::class, 'download'])->name('certificate.download');
Route::post('/profile2/edit', [Profile2Controller::class, 'update'])->name('profile2/');
Route::post('/profile2/edit-update', [Profile2Controller::class, 'updatePassword'])->name('updatePassword');
Route::delete('/user/delete', [Profile2Controller::class, 'destroy'])->name('user.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile2', [Profile2Controller::class, 'index'])->name('profile2.profile.index');
    Route::get('/profile2/edit', [Profile2Controller::class, 'edit'])->name('profile2.profile.edit');
    
    Route::delete('/profile2', [Profile2Controller::class, 'destroy'])->name('profile2.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('user/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

require __DIR__ . '/auth.php';


Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

Route::controller(FacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::resource('users', UserController::class);

Route::resource( 'category', CategoryController::class);

Route::resource('projects', ProjectController::class);

Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('loginprocess', [AdminLoginController::class, 'login'])->name('loginprocess');


// Route::resource('admin/login', AdminLoginController::class);

// Route::get('admin/profile', function () {
//     return view('admin.profile.profile');
// })-> name('profile');

Route::get('admin/profile', [AdminController::class, 'show'])->name('profile');

Route::get('/user2', function () {
    $users = \App\Models\User::with('projects')->get(); // Replace \App\Models\User with your actual User model namespace.
    return view('frontend.profile2.profile', compact('users'));
});


