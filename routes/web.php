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

Route::prefix('auth')->group(function (){
    Route::view('', 'guest.landing');
});

Route::view('/signup', 'guest.signup');
Route::view('/signup/photo', 'guest.photo');
Route::view('/add_credit', 'guest.add_credit');
Route::view('/signin', 'guest.signin');
