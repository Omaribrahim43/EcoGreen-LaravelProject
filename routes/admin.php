<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('admin/dashboard', [AdminLoginController::class, 'index'])->name('admin.dashboard');

Route::resource('users', UserController::class);

Route::resource('category', CategoryController::class);

Route::resource('projects', ProjectController::class);

Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('loginprocess', [AdminLoginController::class, 'login'])->name('loginprocess');
Route::get('admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard')->middleware('isLoggedIn:You have to login first');

Route::get('admin/profile', [AdminController::class, 'show'])->name('admin.profile');

Route::post('admin/profile/update/{id}', [AdminController::class, 'update'])->name('admin.profile.update');

Route::get('admin/profile/reset', [AdminController::class, 'resetPasswordPage'])->name('admin.profile.reset');

Route::get('admin/profile/resetpass', [AdminController::class, 'resetPassword'])->name('admin.profile.resetpassword');

Route::get('admin/profile/logout', [AdminLoginController::class, 'logout'])->name('logoutprocess');

// Route::get('admin/profile/logout', [AdminController::class, 'logout'])->name('logoutprocess');
