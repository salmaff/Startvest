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
    return view('guest.landing');
});

Route::prefix('dashboard')->group(function () {
    Route::name('dashboard.')->group(function () {

        // --- Dashboard Route --- //

        Route::view('', 'dashboard.main')->name('main');
        Route::view('/invest', 'dashboard.saldo')->name('saldo');
        Route::view('/notifikasi/keuangan', 'dashboard.notif.keuangan')->name('notif.keuangan');
        Route::view('/notifikasi/akun', 'dashboard.notif.akun')->name('notif.akun');
        Route::view('/notifikasi/rincianNotif', 'dashboard.notif.rinciannotif')->name('notif.rinciannotif');

    });
});
