<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function show() {
        $data = Course::join('classroom_courses', 'classroom_courses.CourseID', '=', 'courses.CourseID')
        ->join('classrooms', 'classrooms.ClassID', '=', 'classroom_courses.ClassID')
        ->join('classrooms', 'classrooms.ClassroomID', '=', 'classroom_courses.ClassroomID')
        ->get(['courses.CourseName']);
    }

}
