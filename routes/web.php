<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MotorbikeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get ('/login'       , [AuthController::class, 'login'       ])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get ('/logout'      , [AuthController::class, 'logout'      ])->name('logout');
Route::get ('/motorbike/{motorbike}'   , [HomeController::class, 'motorbike'])->name('motorbike');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/motorbike/create', [MotorbikeController::class, 'create'])->name('dashboard_motorbike_create');
    Route::post('/motorbike/store', [MotorbikeController::class, 'store'])->name('dashboard_motorbike_store');
});
