<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('welcome');
});

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('custom-login',[LoginController::class,'customLogin'])->name('login.custom');

Route::get('register',[RegisterController::class,'create'])->name('register.create');
Route::post('register',[RegisterController::class,'store'])->name('register.store');

