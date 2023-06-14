<?php

namespace App\Http\Controllers;

use App\Models\Badges;
use App\Models\User;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    function show() {
        $badges = Badges::all();
        $leaderboard = User::orderBy('UserXP', 'desc')->get();
        $userXP = User::find(1)->value('UserXP');
        $curruser = User::find(1);
        return view('achievement', compact('badges', 'leaderboard', 'curruser', 'userXP'));
    }
}
