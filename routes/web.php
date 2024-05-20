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

Route::prefix('tamu')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\PelangganController@index')->name('index.pelanggan');
    Route::get('/create', 'App\Http\Controllers\Admin\PelangganController@create')->name('create.pelanggan');
    Route::post('/store', 'App\Http\Controllers\Admin\PelangganController@store')->name('store.pelanggan');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\PelangganController@edit')->name('edit.pelanggan');
    Route::put('/update/{id}', 'App\Http\Controllers\Admin\PelangganController@update')->name('update.pelanggan');
    Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\PelangganController@destroy')->name('destroy.pelanggan');
});

Route::prefix('villa')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\VillaCOntroller@index')->name('index.villa');
    Route::get('/create', 'App\Http\Controllers\Admin\VillaCOntroller@create')->name('create.villa');
    Route::post('/store', 'App\Http\Controllers\Admin\VillaCOntroller@store')->name('store.villa');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\VillaCOntroller@edit')->name('edit.villa');
    Route::put('/update/{id}', 'App\Http\Controllers\Admin\VillaCOntroller@update')->name('update.villa');
    Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\VillaCOntroller@destroy')->name('destroy.villa');
});

Route::prefix('reservasi')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\ReservasiController@index')->name('index.reservasi');
    Route::get('/create', 'App\Http\Controllers\Admin\ReservasiController@create')->name('create.reservasi');
    Route::post('/store', 'App\Http\Controllers\Admin\ReservasiController@store')->name('store.reservasi');
    Route::get('/edit/{id}', 'App\Http\Controllers\Admin\ReservasiController@edit')->name('edit.reservasi');
    Route::put('/update/{id}', 'App\Http\Controllers\Admin\ReservasiController@update')->name('update.reservasi');
    Route::delete('/delete/{id}', 'App\Http\Controllers\Admin\ReservasiController@destroy')->name('destroy.reservasi');
});

Route::get('/adminn', function () {
    return view('admin.dashboard.index');
});
Route::get('/adminn/tamu/create', function () {
    return view('admin.tamu.create');
});

Route::get('/villas', function () {
    return view('user.index');
});
