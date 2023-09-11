<?php
 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Profile2Controller;
use App\Http\Controllers\AllProjectController;
use App\Http\Controllers\SingelProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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

require __DIR__ . '/auth.php';

// Route::get('/pay', function () {
//     return view('frontend.home.paybal');});
// Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
// Route::get('cancel', [PayPalController::class, 'payment'])->name('payment.cancel');
// Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');



