<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateQuiz1Controller;
use App\Http\Controllers\CreateQuiz2Controller;
use App\Http\Controllers\CreateQuiz3Controller;
use App\Http\Controllers\PageController;


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
Route::get('/createQuiz1/createQuiz2/{classId}', [CreateQuiz2Controller::class, 'ClassCourse']);
Route::get('/createQuiz1/createQuiz2/createQuiz3/{SessionId}', [CreateQuiz3Controller::class, 'CourseSessions']);

Route::get('/quizList/quizDetails/{QuizID}', [QuizController::class, 'quizDetails']);

Route::get('/navbarFour', function () {
    return view('layouts/navbarFour');
});

Route::get('/quizList', [QuizController::class, 'show']);
Route::get('/createQuiz', [QuizController::class, 'createQuiz']);

Route::get('/quizList/quizDetails/{QuizID}', [QuizController::class, 'quizDetails']);

Route::get('/answer/{QuizID}', [QuestionController::class, 'showQuestion']);
Route::post('/save-answers/{QuizID}', [QuestionController::class, 'saveAnswers'])->name('save.answers');

Route::match(['get', 'post'], '/quizStudentSuccess/{QuizID}', [QuestionController::class, 'updateXP'])->name('success.xp');

Route::get('/achievement', [AchievementController::class, 'show']);

Route::get('/navbarTwo', function () {
    return view('layouts/navbarTwo');
});

Route::get('/navbarOne', function () {
    return view('layouts/navbarOne');
});

Route::get('/navbarThree', function () {
    return view('layouts/navbarThree');
});

Route::match(['get', 'post', 'put', 'patch'], '/editProfile', [UserController::class, 'editProfile']);

Route::get('/createQuiz4', function () {
    return view('createQuiz4');
});

Route::get('/createQuiz5', function () {
    return view('createQuiz5');
});

Route::match(['get', 'post', 'put', 'patch'], '/editProfile', [UserController::class, 'editProfile']);

Route::get('/navbarTwo', [PageController::class, 'createQuizTitle']);
