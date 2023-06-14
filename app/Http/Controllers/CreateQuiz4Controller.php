<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
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

    public function storeQuizInfo(Request $request){
        $validatedData = $request->validate([
            'QuizName' => 'required',
            'QuizInformations' => 'required',
            'QuizDate' => 'required',
            'QuizStart' => 'required',
            'QuizEnd' => 'required',
            'QuizArticle' => 'required',
            'QuizQuestion1' => 'required',
            'QuizQuestion2' => 'required',
            'QuizQuestion3' => 'required',
        ]);

        Quiz::create($validatedData);

        return redirect('/createQuiz4');
    }

    // public function storePage3(Request $request){
    //     // $inputValue = $request->input('dropdown'); // Replace 'dropdown' with the name of your dropdown input

    //     // Retrieve stored input values from the session
    //     $page1Input = session('page1_input');
    //     $page2Input = session('page2_input');
    //     $page3Input = session('page3_input');

    //     // Insert the values into the table or perform any desired operations
    //     $validatedData = $request->validate([
    //         'QuizTitle' => 'required',
    //         'QuizArticle' => 'required',
    //         'QuizDate' => 'required',
    //         'QuizStart' => 'required',
    //         'QuizEnd' => 'required',
    //         'QuizPrepare' => 'required',
    //         // 'QuizQuestion1' => 'required',
    //         // 'QuizQuestion2' => 'required',
    //         // 'QuizQuestion3' => 'required',
    //     ]);

    //     $validatedData['ClassroomID'] = $page1Input;
    //     $validatedData['CourseID'] = $page2Input;
    //     $validatedData['SessionID'] = $page3Input;

    //     Quiz::create($validatedData);
    //     // Question::create()

    //     // Clear the session variables
    //     session()->forget('page1_input');
    //     session()->forget('page2_input');

    //     // Redirect or perform any other actions
    //     return redirect()->route('cq4');
    // }
}
