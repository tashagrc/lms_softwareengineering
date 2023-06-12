<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CreateQuiz4Controller extends Controller
{
    public function createQuiz4(Request $request, $quizID)
    {
        // Retrieve the appropriate quiz data from the database
        $quiz = new Quiz;

        // Update the quiz model with the form input data
        
        $quiz->quiz_name = $request->input('QuizName');
        $quiz->informations = $request->input('QuizInformations');
        $quiz->date = $request->input('QuizDate');
        $quiz->start_time = $request->input('QuizStart');
        $quiz->end_time = $request->input('QuizEnd');

        // Save the updated quiz data to the database
        $quiz->save();

        // Redirect the user to the next step or page
        return Redirect::route('nextStep');
    }
}
