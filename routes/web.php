<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// view routes
Route::get('/', [UserController::class, 'welcome'])->name('home');
Route::get('form', [UserController::class, 'create'])->name('form');
Route::get('data', [UserController::class, 'index'])->name('data');

// process routes
Route::get('user/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('user/submit', [UserController::class, 'submit'])->name('user.submit');
Route::post('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
