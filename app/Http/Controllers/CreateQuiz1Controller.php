<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;

class CreateQuiz1Controller extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the clicked value from the request
        $clickedValue = $request->input('clickedValue');

        return view('createQuiz1', [
            'classes' => Classroom::all(),
            'clickedValue' => $clickedValue,
        ]);
    }
}

