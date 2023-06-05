<?php

use App\Http\Controllers\CrewController;
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\CardTransactionController;
use App\Http\Controllers\ChartApiController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\UserDataController;
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

//Public Media!!!
Route::get('/', [IndexController::class, 'index']);
Route::get('/join-us', [UserDataController::class, 'index']);
Route::get('/team/{id}', [TeamController::class,'TeamId']);

//Auth Progress
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/validate-login', [LoginController::class, 'authanticate']);

//MPJ API routes
Route::group(['prefix' => 'api','middleware' => ['active','auth']],function(){
    Route::get('chart', [ChartApiController::class, 'pick'])->middleware(['admin']);
});

//Dashboard Pages
Route::group(['prefix' => 'dashboard', 'middleware' => ['active', 'auth']], function () {
    Route::get('/notify', [NotifyController::class, 'index'])->middleware(['admin']);
    Route::get('/account-info', [UserAccountController::class, 'index'])->middleware(['admin']);
    Route::get('/home', [DashboardHomeController::class, 'index']);
    Route::get('/profile', [DataController::class,'userData']);
    Route::get('/profile-data', [DataController::class,'dataProfile']);  
    Route::get('/crew', [CrewController::class,'index']);
    Route::get('/regional', [RegionalController::class,'index'])->middleware(['admin']);
    Route::get('/team/', [TeamController::class,'Team'])->middleware('admin');
    Route::get('/transaction', [CardTransactionController::class,'Transaction']);
    Route::get('/transaction-info', [CardTransactionController::class,'TransactionInfo']);
    Route::get('/logout', [LoginController::class, 'logout']);
});

//CREATE UPDATE DELETE SYSTEM✨//

//Upload AREA'S
Route::group(['prefix' => 'upload'], function () {
    Route::post('/user', [UserDataController::class, 'uploadData']);
    Route::post('/regional', [RegionalController::class,'upload'])->middleware(['admin']);
    Route::post('/crew', [CrewController::class,'upload'])->middleware('admin');
});


Route::get('crop-image', [CropController::class, 'index']);
Route::post('imageupload', [CropController::class, 'upload'])->name('imageupload');

//Update AREA'S
Route::group(['prefix' => 'update'], function () {
    Route::patch('/data-user/{id}', [UserDataController::class, 'uploadFullData'])->middleware('admin');
    Route::patch('/user/{id_user}/{id_profile}', [UserDataController::class, 'updateData']);
    Route::patch('/ferivied/{id}', [NotifyController::class, 'ferivied'])->middleware('admin');
    Route::patch('/regional/{id}', [RegionalController::class,'update'])->middleware(['admin']);
    Route::patch('/accepted/{id}', [CardTransactionController::class, 'accepted'])->middleware('admin');
    Route::patch('/rejected/{id}', [CardTransactionController::class, 'rejected'])->middleware('admin');
    Route::patch('/pay/{id}', [CardTransactionController::class, 'Pay'])->middleware('admin');
    Route::patch('/crew/{id}', [CrewController::class,'update'])->middleware('admin');
});

//Delete AREA'S
Route::group(['prefix' => 'delete'], function () {
    Route::delete('/regional/{id}', [RegionalController::class,'delete'])->middleware(['admin']);
    Route::delete('/crew/{id}', [CrewController::class,'delete']);
});
