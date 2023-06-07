<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CreateQuiz1Controller;
use App\Http\Controllers\CreateQuiz2Controller;

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

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/register', [RegisterController::class, 'create'])->middleware(('guest'));
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'create'])->middleware('auth');

Route::get('/createQuiz1', [CreateQuiz1Controller::class, 'index']);
Route::get('createQuiz2/{clickedValue}', [CreateQuiz2Controller::class, 'index'])->name('createQuiz2');

Route::get('/navbarFour', function () {
    return view('layouts/navbarFour');
});
Route::get('/quizList', [QuizController::class, 'show']);
Route::get('/createQuiz', [QuizController::class, 'createQuiz']);

Route::get('quiz/quizDetails/{QuizID}', [QuizController::class, 'quizDetails']);

Route::get('answer/{QuizID}', [QuestionController::class, 'showQuestion']);
Route::post('/save-answers/{QuizID}', [QuestionController::class, 'saveAnswers'])->name('save.answers');

Route::match(['get', 'post'], '/quizStudentSuccess/{QuizID}', [QuestionController::class, 'updateXP']);
