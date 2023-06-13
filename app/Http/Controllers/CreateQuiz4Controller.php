<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
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
        // echo 'test1';
        return view('createQuiz4');
    }
    public function saveQuiz(Request $request){
        // Answer::create([
        //     'AnswerContent' => "hausvdu",
        //     'QuizID' => 1,
        //     'UserID' => 1
        // ]);

        // Quiz::create([
        //     'QuizTitle' => 'kdfhi',
        //     'QuizArticle' => 'The American Revolution, which took place from 1775 to 1783, was a monumental event in the history of the United States. Fueled by a growing discontent with British colonial rule, American colonists rose up to challenge the authority of the British Empire. The Revolution was ignited by events like the Boston Tea Party and the publication of influential writings such as Thomas Paines Common Sense. The colonists fought for their rights, freedom, and representation, ultimately leading to the Declaration of Independence in 1776. The war that followed was marked by key battles like Lexington and Concord, Saratoga, and Yorktown, where the determined colonists, led by figures like George Washington, fought against the British forces. With the support of France, the Americans secured a decisive victory at Yorktown in 1781, leading to the Treaty of Paris in 1783, which recognized the United States as an independent nation. The American Revolution not only shaped the destiny of a new nation but also became an inspiration for other movements for freedom and self-determination around the world.',
        //     'QuizDate' => '2023-06-02',
        //     'QuizStart' => '2023-06-01 12:00:00',
        //     'QuizEnd' => '2023-06-01 13:00:00',
        //     'QuizPrepare' => 'This is an individual quiz that you need to do to get bonus score for your exam. The aim of this quiz is to enhance your knowledge about The American Revolution',
        //     'SessionID' => 2,
        //     'CourseID' => 1,
        //     'ClassroomID' => 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

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

        $quiz = new Quiz();
        $quiz->QuizTitle = $validatedData['QuizName'];
        $quiz->QuizArticle = $validatedData['QuizArticle'];
        $quiz->QuizDate = $validatedData['QuizDate'];
        $quiz->QuizStart = $validatedData['QuizStart'];
        $quiz->QuizEnd = $validatedData['QuizEnd'];

        Quiz::create($quiz);
        // dd($quiz);

        $questions = [
            $validatedData['QuizQuestion1'],
            $validatedData['QuizQuestion2'],
            $validatedData['QuizQuestion3'],
        ];

        foreach ($questions as $questionTitle) {
            $question = new Question();
            $question->QuestionTitle = $questionTitle;
            $question->QuizID = $quiz->QuizID;
            // Set other fields as needed
            Question::create($question);
        }

        return redirect()->route('createQuiz1');
    }
}
