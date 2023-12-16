<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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


Route::prefix('payment')->group(function (){
    Route::view('/', 'guest.payment');
    Route::view('/detail', 'guest.payment-detail');
    Route::view('/method', 'guest.payment-method');
    Route::view('/success', 'guest.payment-success');
});

Route::prefix('project')->group(function(){
    Route::view('/', 'guest.landing_product');
    Route::View('/detail', 'guest.project-detail');
});

Route::get('/', function () {
    return view('guest.landing');
});


Route::prefix('auth')->group(function (){
    Route::view('', 'guest.landing');
});

Route::view('/signup', 'guest.signup');
Route::view('/signup/photo', 'guest.photo');
Route::view('/add_credit', 'guest.add_credit');
Route::view('/welcome', 'guest.welcome');
Route::view('/signin', 'guest.signin');

Route::prefix('dashboard')->group(function () {
    Route::name('dashboard.')->group(function () {

        // --- Dashboard Route --- //

        Route::view('', 'dashboard.main')->name('main');
        // Route::view('/saldo', 'dashboard.saldo')->name('saldo');
        Route::view('/invest/detail', 'dashboard.invest.detail')->name('invest.detail');
        Route::view('/invest/saldo', 'dashboard.invest.saldo')->name('invest.saldo');
        Route::view('/riwayat', 'dashboard.riwayat')->name('riwayat');


        // --- Profile --- //
        Route::view('/profile/edit', 'dashboard.profile.edit')->name('profile.edit');
        Route::view('/profile/password', 'dashboard.profile.password')->name('profile.password');
        Route::view('/profile/bank', 'dashboard.profile.bank')->name('profile.bank');

        // --- Profile --- //
        Route::view('/notifikasi/keuangan', 'dashboard.notif.keuangan')->name('notif.keuangan');
        Route::view('/notifikasi/akun', 'dashboard.notif.akun')->name('notif.akun');
        Route::view('/notifikasi/rincianNotif', 'dashboard.notif.rinciannotif')->name('notif.rinciannotif');

    });
});

