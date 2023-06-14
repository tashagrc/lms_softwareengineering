<?php

namespace App\Http\Controllers;

use App\Models\Badges;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(){
        $userXP = User::find(1)->value('UserXP');
        return view('dashboard', compact('userXP'));
    }
}
