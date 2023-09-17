<?php
 
use App\Http\Controllers\Profile2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;


Route::get('/login', function () {
    return view('auth.login');
})->name('dashboard');

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
// Route::get('payment{price}', [PayPalController::class, 'payment'])->name('payment');
// Route::get('cancel', [PayPalController::class, 'payment'])->name('payment.cancel');
// Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');
// Route::get('/success', function () {
//     return view('frontend.layouts.thankyouPopUp');
// })->name('success');




Route::post('paypal/payment', [PaypalController::class, 'payment'])->name('paypal');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');

