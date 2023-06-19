<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Grade2Controller;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateQuiz1Controller;
use App\Http\Controllers\CreateQuiz2Controller;
use App\Http\Controllers\CreateQuiz3Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ViewGradeTeacherController;
use App\Http\Controllers\CreateQuiz4Controller;


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

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware(('guest'));
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/createQuiz1', [CreateQuiz1Controller::class, 'index']);
// Route::post('/createQuiz1', [CreateQuiz1Controller::class, 'storePage1'])->name('cq1');

Route::get('/createQuiz1/createQuiz2/{classId}', [CreateQuiz2Controller::class, 'ClassCourse']);
// Route::post('/createQuiz1/createQuiz2/{classId}', [CreateQuiz2Controller::class, 'storePage2'])->name('cq2');

Route::get('/createQuiz1/createQuiz2/createQuiz3/{CourseId}/{ClassId}', [CreateQuiz3Controller::class, 'CourseSessions']);
// Route::post('/createQuiz1/createQuiz2/createQuiz3/{SessionId}', [CreateQuiz3Controller::class, 'storePage3'])->name('cq3');

// Route::post('/createQuiz4', [CreateQuiz4Controller::class, 'storePage3'])->name('cq4');

Route::get('/quizList/quizDetails/{QuizID}', [QuizController::class, 'quizDetails']);
Route::get('/quizList', [QuizController::class, 'show']);

Route::get('/quizList/quizDetails/{QuizID}', [QuizController::class, 'quizDetails']);

Route::get('/answer/{QuizID}', [QuestionController::class, 'showQuestion']);
Route::post('/save-answers/{QuizID}', [QuestionController::class, 'saveAnswers'])->name('save.answers');

Route::match(['get', 'post'], '/quizStudentSuccess/{QuizID}', [QuestionController::class, 'updateXP'])->name('success.xp');

Route::get('/achievement', [AchievementController::class, 'show']);




// Route::get('/grade', function () {
//     return view('viewGrade');
// });

Route::get('/viewGradeDetail', function () {
    return view('viewGradeDetail');
})->name('viewGradeDetail');

Route::get('/grades', [YourController::class, 'index'])->name('grades.index');
Route::get('/grade', [GradeController::class, 'showViewGrade'])->name('view.grade');
Route::post('/grade', [GradeController::class, 'processViewGrade'])->name('process.view.grade');

Route::get('/grade2', function () {
    return view('viewGrade2');
});

Route::get('/grade2', [Grade2Controller::class, 'index']);


Route::match(['get', 'post', 'put', 'patch'], '/editProfile', [UserController::class, 'editProfile']);

Route::get('/createQuiz4/{SessionId}/{CourseId}/{ClassId}', [CreateQuiz4Controller::class, 'createQuiz4']);
// Route::post('/createQuiz4', [CreateQuiz4Controller::class, 'createQuiz4'])->name('createQuiz4.createQuiz4');
Route::post('/createQuiz4', [CreateQuiz4Controller::class, 'storeQuizInfo'])->name('createQuiz4.storeQuizInfo');


Route::get('/createQuiz5', function () {
    return view('createQuiz5');
});

Route::match(['get', 'post', 'put', 'patch'], '/editProfile', [UserController::class, 'editProfile']);

Route::get('/navbarTwo', [PageController::class, 'createQuizTitle']);

Route::get('navbar2', function() {
    return view('layouts/navbarTwo');
});

Route::get('navbar3', function() {
    return view('layouts/navbarThree');
});

Route::get('navbar1', function() {
    return view('layouts/navbarOne');
});

Route::get('navbar4', function() {
    return view('layouts/navbarFour');
});

