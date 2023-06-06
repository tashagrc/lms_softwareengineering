<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;

class CreateQuiz1Controller extends Controller
{
    public function index()
    {
        // Your code to retrieve the value
        $clickedValue = 'Your value';

        // Generate the URL for the second page with the route parameter
        $url = route('createQuiz2', ['clickedValue' => $clickedValue]);

        return view('createQuiz1', [
            'url' => $url,
            'classes' => Classroom::all(),
        ]);
    }
}
