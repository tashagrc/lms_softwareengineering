<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Grade2Controller;
use App\Http\Controllers\QuizController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/grade', function () {
    return view('viewGrade');
});

Route::get('/grade', [GradeController::class, 'index']);

Route::get('/viewGradeDetail', function () {
    return view('viewGradeDetail');
})->name('viewGradeDetail');

Route::get('/grade2', function () {
    return view('viewGrade2');
});

Route::get('/grade2', [Grade2Controller::class, 'index']);