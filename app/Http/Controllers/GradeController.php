<?php

namespace App\Http\Controllers;

use App\Models\UserQuiz;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Classroom;

class GradeController extends Controller
{
    public function index(Request $request){
        $classes = Classroom::all();
        $grades = UserQuiz::with('user')->get();

        return view('viewGrade', compact('classes', 'grades'));
    }

    public function showViewGrade()
    {
        $classrooms = Classroom::all();
        return view('viewGrade', compact('classrooms'));
    }

    public function processViewGrade(Request $request)
    {
        $classroomID = $request->input('classroom');
        $students = UserQuiz::whereHas('user', function ($query) use ($classroomID) {
            $query->where('ClassroomID', $classroomID);
        })->get();

        $classrooms = Classroom::all();

        return view('viewGrade', compact('classrooms', 'students'));
    }
}
