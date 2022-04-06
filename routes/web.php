<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/registrasi', [App\Http\Controllers\RegistrasiController::class, 'index'])->name('registrasi');
    Route::post('/registrasi/store', [App\Http\Controllers\RegistrasiController::class, 'store'])->name('store');

Auth::routes();

Route::resource('pendaftar', 'App\Http\Controllers\HomeController');
    Route::get('/pendaftar', [App\Http\Controllers\HomeController::class, 'index'])->name('pendaftar');
    Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
