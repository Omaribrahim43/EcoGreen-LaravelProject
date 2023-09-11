<?php
 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Profile2Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AllProjectController;
use App\Http\Controllers\SingelProjectController;
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\ProfileController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;


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
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

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



//*******************Rania********************* */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/aboutus', [AboutUsController::class, 'home'])->name('home');
//*******************Rania********************* */

Route::get('/contact', function(){
    return view('frontend.contact.contact');
})->name('contact');

Route::get('/testimonial', function(){
    return view('frontend.testimonial');
})->name('testimonial');


// Route::get('/pay', function () {
//     return view('frontend.home.paybal');});
// Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
// Route::get('cancel', [PayPalController::class, 'payment'])->name('payment.cancel');
// Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');



Route::controller(FacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::resource('users', UserController::class);




Route::get('returncontact', function(){
    return view('frontend.contact.contact');
});
Route::get('contact', [ContactController::class, 'showContact'])->name('show.contact');
Route::post('store-contact', [ContactController::class,'store'])->name('store.contact');

 

Route::resource('category', CategoryController::class);

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