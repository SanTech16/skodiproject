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
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kelas', function () {
    return view('kelas');
})->middleware(['auth', 'verified'])->name('kelas');

Route::get('/event', function () {
    return view('event');
})->middleware(['auth', 'verified'])->name('event');

Route::get('/tentang', function () {
    return view('tentang');
})->middleware(['auth', 'verified'])->name('tentang');