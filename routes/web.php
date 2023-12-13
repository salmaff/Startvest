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
    Route::View('/', 'guest.project-detail');
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
