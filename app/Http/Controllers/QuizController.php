<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    function show() {
        $data = Quiz::join('courses', 'courses.CourseID', '=', 'courses.CourseID')
        ->join('classrooms', 'classrooms.ClassroomID', '=', 'quizzes.ClassroomID')
        ->join('sessions', 'sessions.SessionID', '=', 'quizzes.SessionID')
        ->get(['quizzes.*', 'classrooms.ClassroomName', 'courses.CourseName', 'sessions.SessionTopic']);
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
