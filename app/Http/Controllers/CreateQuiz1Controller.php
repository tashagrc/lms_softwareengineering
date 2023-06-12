<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;

class CreateQuiz1Controller extends Controller
{
    public function index(Request $request)
    {
        return view('createQuiz1', [
            'classes' => Classroom::all()
        ]);
    }


    public function storePage1(Request $request){
        $inputValue = $request->input('dropdown'); // Replace 'dropdown' with the name of your dropdown input
        session(['classes' => $inputValue]);

        return redirect()->route('createQuiz2');
    }
}
