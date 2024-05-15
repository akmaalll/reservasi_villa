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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/adminn', function () {
    return view('admin.dashboard.index');
});
Route::get('/adminn/tamu', function () {
    return view('admin.tamu.index');
});
Route::get('/adminn/tamu/create', function () {
    return view('admin.tamu.create');
});
Route::get('/adminn/villa', function () {
    return view('admin.villa.index');
});
Route::get('/adminn/villa/create', function () {
    return view('admin.villa.create');
});
Route::get('/adminn/pemesanan', function () {
    return view('admin.transaksi.pemesanan.index');
});
Route::get('/adminn/pembayaran', function () {
    return view('admin.transaksi.pembayaran.index');
});

Route::get('/villa', function () {
    return view('user.index');
});
