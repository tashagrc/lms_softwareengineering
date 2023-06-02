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
}
