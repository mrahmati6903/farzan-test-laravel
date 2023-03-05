<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('index');
});

Route::get ('/login'       , [AuthController::class, 'login'       ])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get ('/logout'      , [AuthController::class, 'logout'      ])->name('logout');


Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/'    , [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
});
