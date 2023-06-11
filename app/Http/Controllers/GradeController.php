<?php

namespace App\Http\Controllers;

use App\Models\UserQuiz;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = UserQuiz::with('user')->get();

        return view('viewGrade', compact('grades'));
    }
    public function index2($classrooms)
    {
        $classrooms = Classroom::all();

        return view('viewGrade', compact('classrooms'));
    }
    // public function processSelection(Request $request)
    // {
    //     $selectedClassroom = $request->input('classroom');
    
    //     // Redirect to the view for the selected classroom
    //     return redirect()->route('cl', ['classroom' => $selectedClassroom]);
    // }
    // public function classroomGrades($classroom)
    // {
    //     $classroom = Classroom::findOrFail($classroom);
    
    //     $students = $classroom->users;
    //     // Perform any additional logic or filtering if needed
    
    //     return view('classroom-grades', compact('classroom', 'students'));
    // }
    public function showViewGrade()
    {
        $classrooms = Classroom::all();
        return view('viewGrade', ['classrooms' => $classrooms]);
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
