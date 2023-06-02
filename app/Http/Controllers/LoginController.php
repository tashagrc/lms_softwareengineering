<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'UserEmail' => 'required|email:dns',
            'UserPassword' => 'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }
}
