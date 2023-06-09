<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function createQuizTitle()
    {
        $pageTitle = 'Create Quiz';
        return view('layouts.navbarTwo', compact('pageTitle'));
    }
}
