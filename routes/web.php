<?php

use App\Http\Controllers\Auth\AuthController;
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


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'prosesLogin'])->name('proses.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/store', [AuthController::class, 'store'])->name('store.register');

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\admin', 'middleware' => 'auth:web'], function () {

    Route::prefix('adminn')->group(function () {

        Route::get('/', 'DahsboardController@index')->name('dashboard');

        Route::prefix('tamu')->group(function () {
            Route::get('/', 'PelangganController@index')->name('index.pelanggan');
            Route::get('/create', 'PelangganController@create')->name('create.pelanggan');
            Route::post('/store', 'PelangganController@store')->name('store.pelanggan');
            Route::get('/edit/{id}', 'PelangganController@edit')->name('edit.pelanggan');
            Route::put('/update/{id}', 'PelangganController@update')->name('update.pelanggan');
            Route::delete('/delete/{id}', 'PelangganController@destroy')->name('destroy.pelanggan');
        });

        Route::prefix('villa')->group(function () {
            Route::get('/', 'VillaCOntroller@index')->name('index.villa');
            Route::get('/create', 'VillaCOntroller@create')->name('create.villa');
            Route::post('/store', 'VillaCOntroller@store')->name('store.villa');
            Route::get('/edit/{id}', 'VillaCOntroller@edit')->name('edit.villa');
            Route::put('/update/{id}', 'VillaCOntroller@update')->name('update.villa');
            Route::delete('/delete/{id}', 'VillaCOntroller@destroy')->name('destroy.villa');
        });

        Route::prefix('reservasi')->group(function () {
            Route::post('/{id}/status', 'ReservasiController@updatePaymentStatus')->name('reservasi.update.status');
            Route::get('/', 'ReservasiController@index')->name('index.reservasi');
            Route::get('/create', 'ReservasiController@create')->name('create.reservasi');
            Route::post('/store', 'ReservasiController@store')->name('store.reservasi');
            Route::delete('/delete/{id}', 'ReservasiController@destroy')->name('destroy.reservasi');
        });
    });
});

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\user', 'middleware' => 'auth:pelanggan'], function () {
    Route::get('/', 'UserController@index')->name('user');
});
