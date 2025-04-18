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

Route::get('/', function () {
  return view('welcome');
})->name('home');

Route::get('form', [UserController::class, 'create'])->name('form');
Route::get('form/{id}', [UserController::class, 'edit'])->name('form.edit');
Route::post('form/submit', [UserController::class, 'submit'])->name('form.submit');
Route::post('form/delete', [UserController::class, 'delete'])->name('form.delete');

Route::get('data', [UserController::class, 'index'])->name('data');

