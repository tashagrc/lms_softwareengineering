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
        $grades = UserQuiz::with('answer')->get();

        return view('viewGrade2', compact('grades'));
    }
}
