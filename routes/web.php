<?php

use App\Http\Controllers\Auth\UpdatePasswordController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);

    Route::prefix('auth')->group(function () {
        Route::get('/user/edit', [UserController::class, 'edit'])->name('auth.user.edit');
        Route::put('/user', [UserController::class, 'update'])->name('auth.user.update');

        Route::get('/password/edit', [UpdatePasswordController::class, 'edit'])->name('auth.password.edit');
        Route::put('/password', [UpdatePasswordController::class, 'update'])->name('auth.password.update');
    });
});
