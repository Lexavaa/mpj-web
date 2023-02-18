<?php

use App\Http\Controllers\CrewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifyListController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\SomePageController;
use App\Http\Controllers\upUserDataDashboardController;
use App\Http\Controllers\upUserDataHomeController;


/*------------------------------------------- 
✊Route Untuk Halaman Index -- Tampilan User
 Seluruh route area "wajib" Diletakkkan pada groupnya
 agar memudahkan READ CODE & DEVELOPING UNTUK
 PROGRAMMER LAIN.
----------------------------------------------------*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/gabung-mpj', [upUserDataHomeController::class,'index']);
Route::post('/upload/data-user', [upUserDataHomeController::class,'store']);


/*------------------------------------------
✊Route Untuk Autentikasi Dan Security System
 --------------------------------------------*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/checkacc', [LoginController::class, 'authanticate']);
Route::get('/home', [DashboardController::class, 'success'])->middleware(['auth']);
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth');
Route::get('/failed-session', [SomePageController::class, 'FailedSession']);


/*------------------------------------------
✊Route Untuk Halaman Dashboard
 --------------------------------------------*/
Route::patch('/upload/data-user/{id}', [upUserDataDashboardController::class, 'setor'])->middleware(['auth', 'anggota']);
Route::get('/notify-list', [NotifyListController::class, 'index'])->middleware(['auth', 'admin']);
Route::resource('/regional', RegionalController::class)->middleware(['auth', 'admin']);
Route::resource('/crew', CrewController::class)->middleware(['auth']);
