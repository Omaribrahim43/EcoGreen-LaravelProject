<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddAdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


// Route::get('admin/dashboard', [AdminLoginController::class, 'index'])->name('admin.dashboard');

Route::resource('users', UserController::class)->middleware('isLoggedIn');

Route::resource('category', CategoryController::class)->middleware('isLoggedIn');

Route::resource('projects', ProjectController::class)->middleware('isLoggedIn');

Route::resource( 'admins', AddAdminController::class)->middleware('isLoggedIn');

Route::resource('messages', ContactController::class)->middleware('isLoggedIn');


Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('loginprocess', [AdminLoginController::class, 'login'])->name('loginprocess');
Route::get('admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard')->middleware('isLoggedIn');

Route::get('admin/profile', [AdminController::class, 'show'])->name('admin.profile')->middleware('isLoggedIn');

Route::post('admin/profile/update/{id}', [AdminController::class, 'update'])->name('admin.profile.update');

Route::get('admin/profile/reset', [AdminController::class, 'resetPasswordPage'])->name('admin.profile.reset');

Route::post('admin/profile/resetpass', [AdminController::class, 'resetPassword'])->name('admin.profile.resetpassword');

Route::get('admin/profile/logout', [AdminLoginController::class, 'logout'])->name('logoutprocess');

Route::get('not_logged_in', function () {
    return view('admin.alert');
})->name('alert');