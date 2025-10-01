<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    function welcome() {
        return view('welcome.welcome');
    }
    function login() {
        return view('login');
    }

    function about() {
        return view('about');
    }
}
