<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Session;

class CreateQuiz1Controller extends Controller
{
    public function index()
    {
        return view('createQuiz1', [
            'classes' => Classroom::all()
        ]);
    }


    public function storePage1(Request $request){
        $inputValue = $request->input('dropdown'); // Replace 'dropdown' with the name of your dropdown input
        Session::put('classes', $inputValue);
        $request->session()->put('classes',$inputValue);
        if($request->session()->has('classes')){
			echo $request->session()->get('classes');
		}else{
			echo 'Tidak ada data dalam session.';
		}
        // return redirect()->route('createQuiz2', ['classId' => $inputValue]);
    }
}
