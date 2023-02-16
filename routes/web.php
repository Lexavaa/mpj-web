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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class,'index']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/checkacc', [LoginController::class, 'authanticate']);
Route::get('/failed-session', [SomePageController::class, 'FailedSession']);
Route::get('/home', [DashboardController::class, 'success'])->middleware(['auth']);
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth');

Route::resource('/form-mpj', upUserDataHomeController::class);
Route::patch('/upload/data/{id}', [upUserDataDashboardController::class, 'setor'])->middleware(['auth','anggota']);

Route::get('/notify-list',[NotifyListController::class,'index'])->middleware(['auth','admin']);
Route::resource('/regional',RegionalController::class)->middleware(['auth','admin']);
Route::resource('/crew',CrewController::class)->middleware(['auth']);