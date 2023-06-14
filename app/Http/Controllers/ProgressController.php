<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressBarController extends Controller
{
    public function showProgressBar()
    {
        $userXP = $this->getUserXP();

        return view('progress_bar', compact('userXP'));
    }

    private function getUserXP()
    {
        $users = User::all()->get(0);
        $userXP = User::where('id', $users)->value('UserXP');

        return $userXP;
    }
}
