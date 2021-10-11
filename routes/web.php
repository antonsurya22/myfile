<?php

use Illuminate\Support\Facades\Http;
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

Route::get('/', [App\Http\Controllers\HomeController::class,'beranda'])->name('Beranda');

Route::get('/resume', [App\Http\Controllers\HomeController::class,'resume'])->name('Resume');

Route::get('/galeri', [App\Http\Controllers\HomeController::class,'galeri'])->name('Galeri');

Route::get('/kontak', [App\Http\Controllers\HomeController::class,'kontak'])->name('Kontak');



