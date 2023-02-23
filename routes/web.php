<?php

use App\Http\Controllers\CrewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifyListController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\upUserDataDashboardController;
use App\Http\Controllers\upUserDataHomeController;


/*-------------------------------------------
✊Route Untuk Halaman Index -- Tampilan User
 Seluruh route area "wajib" Diletakkkan pada groupnya
 agar memudahkan READ CODE & DEVELOPING UNTUK
 PROGRAMMER LAIN.
----------------------------------------------------*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/gabung-mpj', [upUserDataHomeController::class, 'index']);
Route::post('/upload/data-user', [upUserDataHomeController::class, 'store']);


/*------------------------------------------
✊Route Untuk Autentikasi Dan Security System
 --------------------------------------------*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/checkacc', [LoginController::class, 'authanticate']);


/*------------------------------------------
✊Route Untuk Grouping Activate User
 --------------------------------------------*/
Route::group(['middleware' => ['isActive', 'auth']], function () {
    //✊security system
    Route::get('/home', [DashboardController::class, 'success']);
    Route::post('/logout', [DashboardController::class, 'logout']);

    //✊Dashboard Pages
    Route::get('/notify-list', [NotifyListController::class, 'index'])->middleware('isAdmin');
    Route::patch('/ferivied-user/{id}', [NotifyListController::class, 'ferivied'])->middleware('isAdmin');
    Route::patch('/upload/data-user/{id}', [upUserDataDashboardController::class, 'setor'])->middleware('isAnggota');
    Route::resource('/regional', RegionalController::class)->middleware(['isAdmin']);
    Route::resource('/crew', CrewController::class)->middleware('isAnggota');
    Route::get('/data/media', [DashboardController::class,'media'])->middleware('isAnggota');
    Route::get('/data-lengkap/media', [DashboardController::class,'media_completed'])->middleware('isAnggota');
    Route::get('/pay-in', [PaymentController::class, 'index'])->middleware('isAnggota');
    Route::get('/pay-out', [PaymentController::class, 'index_admin'])->middleware('isAdmin');
    Route::patch('/failed-transaction/{id}', [PaymentController::class, 'failed'])->middleware('isAdmin');
    Route::patch('/success-transaction/{id}', [PaymentController::class, 'success'])->middleware('isAdmin');
    Route::patch('/payment/user/{id}', [PaymentController::class, 'store'])->middleware('isAnggota');
});
