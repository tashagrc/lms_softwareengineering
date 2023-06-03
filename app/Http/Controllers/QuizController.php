<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    function show() {
        $data = Quiz::all();
        return view('quizList', ['quizzes' => $data]);
    }

    function createQuiz() {
        return view('createQuiz1');
    }

    function quizDetails($QuizID) {
        $quiz = Quiz::find($QuizID);

        return view('quizDetails', compact('quiz'));
    }
}
