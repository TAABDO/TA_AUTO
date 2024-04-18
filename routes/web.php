<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Announcer\AnnouncementController;

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
Route::get('userCount',[AdminController::class,'userCount']);

Route::resource('profile',ProfileController::class);

Route::resource('brands',BrandController::class);


// ======================================= Home ==============

Route::get('/',[HomeController::class,'index'])->name('home');

Route::resource('announce',AnnouncementController::class);


// ========================================== Reservations ========================

Route::get('reservations',[ReservationController::class,'create'])->name('reservations');
Route::post('reservations',[ReservationController::class,'store'])->name('reservations.store');
Route::get('reservations/{reservation}',[ReservationController::class,'show'])->name('reservations.show');
Route::get('reservations/{reservation}/edit',[ReservationController::class,'edit'])->name('reservations.edit');
Route::put('reservations/{reservation}',[ReservationController::class,'update'])->name('reservations.update');
Route::delete('reservations/{reservation}',[ReservationController::class,'destroy'])->name('reservations.destroy');



// Route::get('users',[UserController::class,'users'])->name('users');

// Route::get('admin',[AdminController::class,'admin'])->name('admin.admin');
// Route::get('admin',[AdminController::class,'index'])->name('admin.index');
// Route::put('admin/{user}/update',[AdminController::class,'update'])->name('admin.update');


Route::get('contact',[ContactController::class,'contact'])->name('contact.contact');

Route::get('blogs',[BlogController::class, 'blog'])->name('blogs');
Route::get('blogsDetails/{id}',[BlogController::class, 'show'])->name('blogs.details');

Route::get('Blog',[BlogController::class,'index'])->name('Blog.Blog');
Route::get('Blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('Blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('Blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('Blog/{blog}/update', [BlogController::class, 'update'])->name('blog.update');
Route::delete('Blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');


// Route::get('users',[UserController::class,'index'])->name('users.index');


// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('car',[CarController::class,'index'])->name('car.index');
Route::get('filtercar',[CarController::class,'filterCar'])->name('car.filterCar');
Route::get('car/{car}',[CarController::class,'show'])->name('car.details');




Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('regesterUser',[AuthController::class,'regesterUser'])->name('regesterUser');
Route::post('loginUser',[AuthController::class,'loginUser'])->name('loginUser');
Route::POST('logout',[AuthController::class,'logout'])->name('logout');






















