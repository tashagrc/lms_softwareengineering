<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create(){
        return view('login');
    }

    // public function authenticate(Request $request){
    //     $credentials = $request->validate([
    //         'UserEmail' => 'required|email:dns',
    //         'UserPassword' => 'required'
    //     ]);

    //     if (Auth::attempt($credentials)){
    //         $request->session()->regenerate();
    //         return redirect()->intended('/dashboard');
    //     }

    //     return back()->with('loginError', 'Login failed!');
    // }

    public function authenticate(Request $request)
    {
        $user = User::where('UserEmail', $request->input('UserEmail'))->where('UserPassword', $request->input('UserPassword'))->first();
        if ($user) {
            // Authentication successful
            Auth::loginUsingId($user->UserID);
            $request->session()->regenerate();
            if(Auth::check()){
                if(Auth::user()->UserRole == 'Teacher'){
                    return redirect()->intended('/createQuiz1');
                }
                return redirect()->intended('/dashboard');
            }
        } else {
            // Authentication failed
            return redirect()->back()->withErrors([
                'login_failed' => 'Invalid email or password.',
            ]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
