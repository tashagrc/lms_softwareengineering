<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    static function countQuestion($QuizID) {
        $count = Question::where('QuizID', $QuizID)->count();
        return $count;
    }
}
