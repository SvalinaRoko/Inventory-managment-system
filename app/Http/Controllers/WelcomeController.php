<?php

namespace App\Http\Controllers;

class WelcomeController
{
    function welcome() {
        return view('welcome');
    }

    function login() {
        return view('login');
    }
}
