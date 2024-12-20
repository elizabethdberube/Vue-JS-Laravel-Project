<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function welcome()
    {
        $user = Auth::user();

        return view('welcome', ['user' => $user]);
    }
}
