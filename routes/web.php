<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\ContactController;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BlogStatusController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\client\ClientProfileController;
use App\Http\Controllers\client\ClientReservationController;
use App\Http\Controllers\Announcer\AnnouncementController;
use App\Http\Controllers\Announcer\AnnoucerProfileController;

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

// ==================================== Admin ===========================

Route::middleware('Admin')->group(function () {

    Route::resource('Admin',AdminController::class);
    Route::get('Blog', [BlogStatusController::class, 'index'])->name('blog.index');
    Route::get('Blog/{blog}', [BlogStatusController::class, 'edit'])->name('blogStatus.edit');
    Route::put('Blog/{blog}', [BlogStatusController::class, 'accepteblog'])->name('blog.accepteblog');
    Route::resource('AdminProfile',AdminProfileController::class);
    Route::resource('brands',BrandController::class);
    
});

// ==================================== Home ============================

Route::get('/',[HomeController::class,'index'])->name('home');

// ==================================== Client ==========================
Route::middleware('Client')->group(function () {

Route::resource('ClientProfile',ClientProfileController::class);
Route::get('ClientReservations',[ClientReservationController::class,'index'])->name('ClientReservations.index');
Route::get('ClientReservations/{reservation}',[ClientReservationController::class,'show'])->name('ClientReservations.show');
Route::delete('ClientReservations/{id}',[ClientReservationController::class,'destroy'])->name('ClientReservations.destroy');
Route::get('ClientReservations',[ClientReservationController::class,'create'])->name('ClientReservations.create');
});
// ==================================== Announcer ========================

Route::resource('AnnouncerProfile',AnnoucerProfileController::class);

Route::get('blogs',[BlogController::class, 'blog'])->name('blogs');
Route::get('blogsDetails/{id}',[BlogController::class, 'show'])->name('blogs.details');
Route::get('Blog',[BlogController::class,'index'])->name('Blog.Blog');
Route::get('Blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('Blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('Blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('Blog/{blog}/update', [BlogController::class, 'update'])->name('blog.update');
Route::delete('Blog/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');

// ======================================= Home ==============


Route::resource('announce',AnnouncementController::class);


// ========================================== Reservations ========================

Route::get('reservations',[ReservationController::class,'create'])->name('reservations');
Route::post('reservations',[ReservationController::class,'store'])->name('reservations.store');

// Route::post('reservations',[ReservationController::class,'store'])->name('reservations.store');


Route::get('reservations/{reservation}',[ReservationController::class,'show'])->name('reservations.show');
Route::get('reservations/{reservation}/edit',[ReservationController::class,'edit'])->name('reservations.edit');
Route::put('reservations/{reservation}',[ReservationController::class,'update'])->name('reservations.update');
Route::delete('reservations/{reservation}',[ReservationController::class,'destroy'])->name('reservations.destroy');


Route::get('contact',[ContactController::class,'contact'])->name('contact.contact');





// ================================== cars ========================


Route::get('car',[CarController::class,'index'])->name('car.index');
Route::get('filtercar',[CarController::class,'filterCar'])->name('car.filterCar');
Route::get('car/{car}',[CarController::class,'show'])->name('car.details');

// ==================================== system Authentication ============

Route::get('login',[AuthController::class,'login'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('regesterUser',[AuthController::class,'regesterUser'])->name('regesterUser');
Route::post('loginUser',[AuthController::class,'loginUser'])->name('loginUser');
Route::POST('logout',[AuthController::class,'logout'])->name('logout');
Route::get('/assign-role/{role}', [AuthController::class, 'assignRole'])->name('assignRole');
Route::get('/forgot-password', [ForgetPasswordController::class, 'index'])->name('password.forget');
Route::post('/forgot-password', [ForgetPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgetPasswordController::class, 'reset'])->name('password.update');
