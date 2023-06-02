<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    //     // return back()->with('loginError', 'Login failed!');
    // }

    public function authenticate(Request $request)
    {
        $user = User::where('UserEmail', $request->input('UserEmail'))->where('UserPassword', $request->input('UserPassword'))->first();

        // dd($user);
        if ($user) {
            // Authentication successful
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors([
                'login_failed' => 'Invalid email or password.',
            ]);
        }
    }
}
