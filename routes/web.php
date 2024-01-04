<?php

use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\ProductpriceController;
use App\Http\Controllers\admin\ProductController;
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
Route::get('/product-pricing',[ProductpriceController::class,'index'])->name('home.menu');
Route::get('/contact',[ContactController::class,'index'])->name('home.contact');

Route::prefix('admin')->middleware(['auth', 'verified', 'adm'])->group(function(){
    Route::resource('/products',ProductController::class);
    Route::get('/productsearch',[ProductController::class,'search']);
});

Route::get('/product-details/{id}', [ProductpriceController::class, 'showDetails'])->name('product.details');

Route::get('/user-profile',[UProfileController::class,'index'])->name('user.profile');
Route::post('/user-profile',[UProfileController::class,'profileUpdate'])->name('profileupdate');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/authorization.php'; 
