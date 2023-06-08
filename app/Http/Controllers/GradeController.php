<?php

namespace App\Http\Controllers;

use App\Models\UserQuiz;
use App\Models\User;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = UserQuiz::with('user')->get();

        return view('viewGrade', compact('grades'));
    }
}
