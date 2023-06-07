<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    static function countQuestion($QuizID) {
        $count = Question::where('QuizID', $QuizID)->count();
        return $count;
    }

    function showQuestion($QuizID) {
        // join quizz, session, question berdasar quizzid
        $article = Quiz::join('sessions', 'sessions.SessionID', '=', 'quizzes.SessionID')
        ->where('quizzes.QuizID', $QuizID)
        ->select('quizzes.*', 'sessions.SessionTopic')
        ->first();
        $question = Question::where('QuizID', $QuizID)->get();
        return view('answerQuiz', compact('article', 'question'));
    }

    public function saveAnswers(Request $request, $QuizID)
    {
        $answers = $request->input('answers');
        // dd($answers);
        foreach ($answers as $answer) {
            // Insert the answer into the database using Eloquent
            Answer::create([
                'AnswerContent' => $answer,
                'QuizID' => $QuizID,
                'UserID' => 1 // TODO
            ]);
        }
    }

    // Redirect or return a response as needed
}



