<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                'UserID' => 1
            ]);
        }
        return redirect()->route('success.xp', ['QuizID' => $QuizID]);
    }

    static function updateXP($QuizID) {
        $count = QuestionController::countQuestion($QuizID);
        $xp = $count * 50;
        $user = User::find(1);
        $quiz = Quiz::find($QuizID);
        User::where('UserID', 1)->update(['UserXP' => DB::raw('UserXP + ' . $xp)]);
        return view('quizStudentSuccess', compact('xp', 'user', 'quiz'));
    }

    // Redirect or return a response as needed
}



