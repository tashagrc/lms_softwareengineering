<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;

class CreateQuiz3Controller extends Controller
{
    public function CourseSessions($CourseId)
{
    $sessions = Session::join('courses', 'courses.CourseID', '=', 'sessions.CourseID')
        ->where('sessions.CourseID', $CourseId)
        ->get(['sessions.SessionID', 'sessions.SessionTopic']);

    return view('createQuiz3', [
        'sessions' => $sessions
    ]);
}

}

