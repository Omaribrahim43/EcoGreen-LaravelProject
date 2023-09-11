<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('admin/profile', [AdminController::class, 'show'])->name('profile');

Route::get('admin/dashboard', [AdminLoginController::class, 'index'])->name('admin.dashboard');

Route::resource('users', UserController::class);

Route::resource('category', CategoryController::class);

Route::resource('projects', ProjectController::class);

Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('loginprocess', [AdminLoginController::class, 'login'])->name('loginprocess');

Route::get('admin/profile', [AdminController::class, 'show'])->name('profile');
