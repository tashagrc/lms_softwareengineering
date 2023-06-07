<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClassroomCourse;

class CreateQuiz2Controller extends Controller
{
    public function index(Request $request, $clickedValue)
    {
        // Access the value from the route parameter
        $value = $clickedValue;

        // Rest of your code...

        return view('createQuiz2', [
            'value' => $value,
            'classCourse' => ClassroomCourse::all(),
        ]);
    }
}


