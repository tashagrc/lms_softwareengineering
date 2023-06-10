<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class CreateQuiz4Controller extends Controller
{
    public function saveInformation(Request $request, $QuizID)
    {
        $information = $request->input('information');
        foreach ($information as $information) {
            Quiz::create([
                'InformationContent' => $information,
                'QuizID' => $QuizID,
            ]);
        }
        return redirect()->route(['QuizID' => $QuizID]);
    }
}
