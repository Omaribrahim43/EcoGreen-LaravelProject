<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Profile2Controller;
use App\Http\Controllers\AllProjectController;
use App\Http\Controllers\SingelProjectController;



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

require __DIR__ . '/auth.php';




// Route::get('/pay', function () {
//     return view('frontend.home.paybal');});
// Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
// Route::get('cancel', [PayPalController::class, 'payment'])->name('payment.cancel');
// Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');



// Route::resource('admin/login', AdminLoginController::class);

// Route::get('admin/profile', function () {
//     return view('admin.profile.profile');
// })-> name('profile');


Route::get('/user2', function () {
    $users = \App\Models\User::with('projects')->get(); // Replace \App\Models\User with your actual User model namespace.
    return view('frontend.profile2.profile', compact('users'));
});

// *******************Sara**********************

Route::get('/Allprojects/{id?}', [AllProjectController::class, 'show'])->name('All.projects');

// Route::get('/All/service/projects/2',function()
// {return view('frontend.project.project');})->name('All.SProject');

// Route::get('/All/item/projects/3', function()
// {return view('frontend.project.project');})->name('All.IProject');

// Route::get('/All/donation/projects/1', function()
// {return view('frontend.project.project');})->name('All.DProject');

// ----------singelproject----------
Route::get('/open/form', [SingelProjectController::class, 'openForm'])->name('open.form');
Route::get('/open/service/form', [SingelProjectController::class, 'openFormservice'])->name('open.Sform');
Route::get('/open/item/form', [SingelProjectController::class, 'openFormitem'])->name('open.Iform');

Route::get('/Donation.singelProject/{id}', [SingelProjectController::class, 'showDonation'])->name('show.Donation');
Route::get('/Item_Project.singelProject/{id}', [SingelProjectController::class, 'showitem'])->name('show.item');
Route::get('/service_project.singelProject/{id}', [SingelProjectController::class, 'showservice'])->name('show.service');

Route::post('/service.form', [SingelProjectController::class, 'checkformservice'])->name('form.service');
Route::post('/item.form', [SingelProjectController::class, 'checkformitem'])->name('form.item');
Route::post('/form.Donation', [SingelProjectController::class, 'checkformDonation'])->name('Donation.form');


Route::post('/Donation.storeform', [SingelProjectController::class, 'storeformDonation'])->name('store.donation');
Route::get('/item.storeform', [SingelProjectController::class, 'storeformitem'])->name('store.item');
Route::get('/service.storeform', [SingelProjectController::class, 'storeformservice'])->name('sorte.service');