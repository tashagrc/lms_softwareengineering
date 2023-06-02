<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'UserName' => 'required|alpha',
            'UserEmail' => 'required|email:dns|unique:users',
            'UserPassword' => 'required|min:5|max:255'
        ]);

        $validatedData['UserPassword'] = Hash::make($validatedData['UserPassword']);

        User::create($validatedData);

        return redirect('/login');
    }
}
