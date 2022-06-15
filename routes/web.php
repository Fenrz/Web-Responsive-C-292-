<?php

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
  return 'Berhasil login!';});

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'simpanuser'])->name('simpanuser');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'ceklogin'])->name('ceklogin');