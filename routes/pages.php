<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AllProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingelProjectController;
use App\Http\Controllers\Quickhelp;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


// home page routes
Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/home', [HomeController::class, 'nav'])->name('nav');

// contact us page routes
Route::get('returncontact', function () {
    return view('frontend.contact.contact');
});
Route::get('contact', [ContactController::class, 'showContact'])->name('show.contact');
Route::post('store-contact', [ContactController::class, 'store'])->name('store.contact');

// testimonial page routes
Route::get('/testimonial', function () {
    return view('frontend.testimonial');
})->name('testimonial');

// donations pages routes (main cycle)
Route::get('/Allprojects/{id?}', [AllProjectController::class, 'show'])->name('All.projects');

// ----------singelproject----------
Route::get('/open/form/{id}', [SingelProjectController::class, 'openForm'])->middleware(['auth', 'verified'])->name('open.form');
Route::get('/open/service/form/{id}', [SingelProjectController::class, 'openFormservice'])->middleware(['auth', 'verified'])->name('open.Sform');
Route::get('/open/item/form/{id}', [SingelProjectController::class, 'openFormitem'])->middleware(['auth', 'verified'])->name('open.Iform');

Route::get('/Donation/singelProject/{id}', [SingelProjectController::class, 'showDonation'])->name('show.Donation');
Route::get('/Item_Project.singelProject/{id}', [SingelProjectController::class, 'showitem'])->name('show.item');
Route::get('/service_project.singelProject/{id}', [SingelProjectController::class, 'showservice'])->name('show.service');

Route::post('/service.form', [SingelProjectController::class, 'checkformservice'])->name('form.service');
Route::post('/item.form', [SingelProjectController::class, 'checkformitem'])->name('form.item');
Route::post('/form.Donation', [SingelProjectController::class, 'checkformDonation'])->name('Donation.form');


Route::post('/Donation.storeform', [SingelProjectController::class, 'storeformDonation'])->name('store.donation');
Route::post('/item.storeform', [SingelProjectController::class, 'storeformitem'])->name('store.item');
Route::post('/service.storeform', [SingelProjectController::class, 'storeformservice'])->name('sorte.service');

// Route::get('/open/help/form', [SingelProjectController::class, 'openFormhelp'])->middleware(['auth', 'verified'])->name('open.help.form');

// Route::post('/Donation.Quickstoreform', [Quickhelp::class, 'storeformDonation'])->name('store.Quick.donation');
// Route::post('/item.Quickstoreform', [Quickhelp::class, 'storeformitem'])->name('store.Quick.item');
// Route::post('/service.Quickstoreform', [Quickhelp::class, 'storeformservice'])->name('sorte.Quick.service');
// Route::post('/project/Quickstoreform', [Quickhelp::class, 'storeQuickProject'])->name('sorte.Quick.project');