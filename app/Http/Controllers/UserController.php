<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function editProfile() {
        $users = User::all()->get(0); // should be current user
        return view('profile.edit', compact('users'));
    }
}
