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
    return view('home',[
        "title" => "Beranda"
    ]);
})->name('Beranda');

Route::get('/resume', function () {
    return view('resume',[
        "title" => "Resume"
    ]);
})->name('Resume');

Route::get('/galeri', function () {
    return view('galeri',[
        "title" => "Galeri"
    ]);
})->name('Galeri');

Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "Kontak"
    ]);
})->name('Kontak');



