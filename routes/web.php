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
    return view('landingPage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/navbarOne', function () {
    return view('navbarOne');
});

Route::get('/navbarTwo', function () {
    return view('navbarTwo');
});

Route::get('/navbarThree', function () {
    return view('navbarThree');
});

Route::get('/navbarFour', function () {
    return view('navbarFour');
});
