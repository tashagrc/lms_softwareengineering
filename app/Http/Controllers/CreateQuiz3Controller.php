<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;

class CreateQuiz3Controller extends Controller
{
    public function CourseSessions($SessionId)
    {
        $sessions = Session::join('courses', 'courses.CourseID', '=', 'sessions.CourseID')
            ->where('sessions.SessionID', $SessionId)
            ->get(['sessions.SessionTopic']);

        return view('createQuiz3', [
            'sessions' => $sessions
        ]);

    }
}

