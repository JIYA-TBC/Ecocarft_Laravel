<?php

use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\MenupriceController;
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
Route::get('/menu-pricing',[MenupriceController::class,'index'])->name('home.menu');
Route::get('/contact',[ContactController::class,'index'])->name('home.contact');
