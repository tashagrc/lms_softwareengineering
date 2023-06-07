<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    function show() {
        $data = Quiz::join('courses', 'courses.CourseID', '=', 'quizzes.CourseID')
            ->join('classrooms', 'classrooms.ClassroomID', '=', 'quizzes.ClassroomID')
            ->join('sessions', 'sessions.SessionID', '=', 'quizzes.SessionID')
            ->leftJoin('user_quizzes', function ($join) {
                $join->on('quizzes.QuizID', '=', 'user_quizzes.QuizID');
                    // ->where('user_quizzes.UserID', '=', Auth::user()->UserID);
            })
            ->get([
                'quizzes.QuizTitle',
                'classrooms.ClassroomName',
                'courses.CourseName',
                'quizzes.QuizDate',
                'quizzes.QuizStart',
                'quizzes.QuizEnd',
                'user_quizzes.QuizScore',
                'user_quizzes.StatusPlayed'
            ]);

        return view('quizList', ['quizzes' => $data]);
    }


    function createQuiz() {
        return view('createQuiz1');
    }

    function quizDetails($QuizID) {

        $quiz = Quiz::join('courses', 'courses.CourseID', '=', 'quizzes.CourseID')
        ->join('classrooms', 'classrooms.ClassroomID', '=', 'quizzes.ClassroomID')
        ->join('sessions', 'sessions.SessionID', '=', 'quizzes.SessionID')
        ->where('quizzes.QuizID', $QuizID)
        ->select('quizzes.*', 'classrooms.ClassroomName', 'courses.CourseName', 'sessions.SessionTopic')
        ->first();

        $totalQuestion = QuestionController::countQuestion($QuizID);
        return view('quizDetails', compact('quiz', 'totalQuestion'));
    }


}
