<?php

use App\Http\Controllers\LocationsController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsersController;


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

Auth::routes();
Route::resource('/', HomeController::class);


/*--------------------------------------------------------------------------------------
All Admin Routes List
----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('admin', [DashboardController::class, 'index'])->name('admin.home');

    Route::resource('admin/users', UsersController::class);
    Route::resource('admin/tags', TagsController::class);
    Route::resource('admin/locations', LocationsController::class);
});


/*--------------------------------------------------------------------------------------
All Customer Routes List
----------------------------------------------------------------------------------------*/
Route::middleware(['auth', 'user-access:customer'])->group(function () {
    Route::get('customer', [CustomerController::class, 'index'])->name('customer.home');
    // Route::get('approval/history', [HistoryListController::class, 'index']);
});

 