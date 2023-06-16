<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassroomCourse;
USE App\Models\Course;
USE App\Models\Classroom;
USE App\Models\Quiz;

class CreateQuiz2Controller extends Controller
{

    // function ClassCourse($ClassId) {
    //     $courses = ClassroomCourse::join('courses', 'courses.CourseID', '=', 'classroom_courses.CourseID')
    //         ->join('classrooms', 'classrooms.ClassroomID', '=', 'classroom_courses.ClassroomID')
    //         ->where('classroom_courses.ClassroomID', $ClassId)
    //         ->get(['courses.CourseName']);

    //     return view('createQuiz2', [
    //         'courses' => $courses
    //     ]);
    // }

    public function ClassCourse($ClassId){
        $courses = ClassroomCourse::join('courses', 'courses.CourseID', '=', 'classroom_courses.CourseID')
            ->join('classrooms', 'classrooms.ClassroomID', '=', 'classroom_courses.ClassroomID')
            ->where('classroom_courses.ClassroomID', $ClassId)
            ->get(['courses.CourseID', 'courses.CourseName']); // Include the CourseID

        return view('createQuiz2', [
            'courses' => $courses,
            'class_id' => $ClassId
        ]);
    }

    // public function storePage2(Request $request){
    //     $inputValue = $request->input('dropdown'); // Replace 'dropdown' with the name of your dropdown input
    //     session(['page2_input' => $inputValue]);

    //     return redirect()->route('cq3');
    // }
}


