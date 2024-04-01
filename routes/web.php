<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Pages\BlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Pages\ContactController;

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
// ============================ Admin =============================

Route::resource('Admin',AdminController::class);

Route::resource('brands',BrandController::class);



// ======================================= Home ==============

Route::get('Home',[HomeController::class,'car']);



// Route::get('admin',[AdminController::class,'admin'])->name('admin.admin');
// Route::get('admin',[AdminController::class,'index'])->name('admin.index');
// Route::put('admin/{user}/update',[AdminController::class,'update'])->name('admin.update');


Route::get('contact',[ContactController::class,'contact'])->name('contact.contact');
Route::get('Blog',[BlogController::class,'Blog'])->name('Blog.Blog');

// Route::get('users',[UserController::class,'index'])->name('users.index');




Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('car',[CarController::class,'index'])->name('car.index');

Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('regesterUser',[AuthController::class,'regesterUser'])->name('regesterUser');
Route::post('loginUser',[AuthController::class,'loginUser'])->name('loginUser');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
