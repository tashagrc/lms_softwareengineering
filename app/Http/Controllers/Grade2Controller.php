<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\User;
use App\Models\UserQuiz;
use Illuminate\Http\Request;

class Grade2Controller extends Controller
{
    public function index()
    {
        $grades = UserQuiz::join('quizzes', 'quizzes.QuizID', '=', 'user_quizzes.QuizID')->get();

        return view('viewGrade2', compact('grades'));
    }
}
