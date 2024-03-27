<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Pages\BlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Auth\regesteredUserController;

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
Route::get('Home',[HomeController::class,'car']);
Route::get('admin',[AdminController::class,'admin'])->name('admin.admin');
Route::get('contact',[ContactController::class,'contact'])->name('contact.contact');
Route::get('Blog',[BlogController::class,'Blog'])->name('Blog.Blog');




// Route::resource('login',LoginController::class);
// Route::resource('login',LoginController::class);


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('car',[CarController::class,'index'])->name('car.index');

Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');


