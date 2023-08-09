<?php

use App\Http\Controllers\GrafikController;
use App\Http\Controllers\pesanTiketController;
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
// set route untuk halaman utama
Route::get('/', function () {
    return view('home');
});
// set route untuk halaman daftar pesanan dan form pemesanan
Route::resource('/pesanan', \App\Http\Controllers\PesananController::class);

// set route untuk halaman grafik
Route::get('/grafik', [GrafikController::class, 'index'])->name('view.grafik');
