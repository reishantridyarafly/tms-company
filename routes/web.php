<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda.index');
Route::get('/tentang', [App\Http\Controllers\TentangController::class, 'index'])->name('tentang.index');

Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/detail', [App\Http\Controllers\ArtikelController::class, 'detail'])->name('artikel.detail');

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak.index');