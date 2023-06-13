<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CreateQuiz4Controller extends Controller
{
    // public function createQuiz4(Request $request, $quizID)
    // {
    //     // Retrieve the appropriate quiz data from the database
    //     $quiz = new Quiz;

    //     // Update the quiz model with the form input data

    //     $quiz->quiz_name = $request->input('QuizName');
    //     $quiz->informations = $request->input('QuizInformations');
    //     $quiz->date = $request->input('QuizDate');
    //     $quiz->start_time = $request->input('QuizStart');
    //     $quiz->end_time = $request->input('QuizEnd');

    //     // Save the updated quiz data to the database
    //     $quiz->save();

    //     // Redirect the user to the next step or page
    //     return Redirect::route('nextStep');
    // }

    public function index() {
        return view('createQuiz4');
    }

    public function storeQuizInfo(Request $request){
        // $validatedData = $request->validate([
        //     'QuizName' => 'required',
        //     'QuizInformations' => 'required',
        //     'QuizDate' => 'required',
        //     'QuizStart' => 'required',
        //     'QuizEnd' => 'required',
        //     'QuizArticle' => 'required',
        //     'QuizQuestion1' => 'required',
        //     'QuizQuestion2' => 'required',
        //     'QuizQuestion3' => 'required',
        // ]);

        // Quiz::create($validatedData);

        // return redirect('/createQuiz4');

        $classes = $request->session()->get('classes');
        $courses = $request->session()->get('courses');
        $sessions = $request->session()->get('sessions');
        $quizTitle = $request->input('QuizName');
        $quizInfo = $request->input('QuizInformations');
        $quizArticle = $request->input('QuizArticle');
        $quizDate = $request->input('QuizDate');
        $quizStart = $request->input('QuizStart');
        $quizEnd = $request->input('QuizEnd');

        // Create a new Quiz model instance
        $quiz = new Quiz();
        $quiz->QuizTitle = $quizTitle;
        $quiz->QuizPrepare = $quizInfo;
        $quiz->QuizArticle = $quizArticle;
        $quiz->QuizDate = $quizDate;
        $quiz->QuizStart = $quizStart;
        $quiz->QuizEnd = $quizEnd;
        $quiz->SessionID = $sessions;
        $quiz->CourseID = $courses;
        $quiz->ClassroomID = $classes;
        $quiz->timestamps = true;

        // Save the Quiz model to the database
        // $quiz->save();
        Quiz::create($quiz);

        // Clear the session data
        $request->session()->forget(['classes', 'courses', 'sessions']);

        // Redirect or perform any other actions
        return redirect()->route('createQuiz1');
    }
}
