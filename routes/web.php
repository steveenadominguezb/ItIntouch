<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

#Dirige a la vista register
Route::get('/register', [SessionsController::class, 'createRegister'])->name('register.index');

#Almacena el registro y dirige a la misma vista
Route::post('/register', [SessionsController::class, 'storeRegister'])->name('register.store');

#Dirige a la vista login
Route::get('/login', [SessionsController::class, 'create'])->name('login.index');

#Comprueba si puede iniciar sesion y redirige a home
Route::post('/login', [SessionsController::class, 'login'])->middleware('guest')->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');




