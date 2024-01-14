<?php

use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\ProductpriceController;
use App\Http\Controllers\front\TestimonialController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ManageUsersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\front\UProfileController;

use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/about',[AboutController::class,'index'])->name('home.about');
Route::get('/product-pricing',[ProductpriceController::class,'index'])->name('home.product');
Route::get('/contact',[ContactController::class,'index'])->name('home.contact');
Route::get('/testimonial',[TestimonialController::class,'index'])->name('home.testimonial');

Route::prefix('admin')->middleware(['auth', 'verified', 'adm'])->group(function(){
    Route::resource('/products',ProductController::class);
    Route::get('/productsearch',[ProductController::class,'search']);
});


Route::get('/front/search', [ProductpriceController::class, 'search'])->name('front.search');


// Route::get('/admin/users',[ManageUsersController::class,'index'])->name('admin.users');

Route::prefix('superadmin')->middleware(['auth','verified','superadm'])->group(function () {
    Route::get('/users', [ManageUsersController::class, 'index'])->name('superadmin.users');
    Route::delete('/destroy/{id}', [ManageUsersController::class, 'destroy'])->name('users.destroy');
    Route::put('/update/{id}', [ManageUsersController::class, 'update'])->name('users.update');
});

Route::get('/product-details/{id}', [ProductpriceController::class, 'show'])->name('product.details');

Route::get('/user-profile',[UProfileController::class,'index'])->name('user.profile');
Route::post('/user-profile',[UProfileController::class,'profileUpdate'])->name('profileupdate');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('pay',[PaymentController::class,'pay'])->name('payment');
Route::get('success',[PaymentController::class,'success']);
Route::get('error',[PaymentController::class,'error']);
require __DIR__.'/authorization.php'; 
