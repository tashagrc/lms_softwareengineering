<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Badges;


class UserController extends Controller
{
    function editProfile() {
        $users = User::all()->get(0); // should be current user
        $userXP = User::find(1)->value('UserXP');
        return view('profile.edit', compact('users', 'userXP'));
    }
}
