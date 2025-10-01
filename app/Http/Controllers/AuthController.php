<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    function loggedin() {
        return view('welcome.loggedin');
    }

    public function process (Request $request) {
        $credentials = $request->validate([
            'email' => "required|email|max:40",
            'password' => "required"
        ],
        [
            "email.required"=>"Please enter your email",
            "email.email" => "Please enter a valid email address",
            "email.max"=>"You have reached maximum number of characters",
            "password.required"=>"Please enter a password"
          ]);

          if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect('welcome/loggedin');
        }

        return back()->withErrors([
            'email' => 'Email is not valid.',
            'password' => 'Password is not valid.',
        ])->onlyInput('email','password');
    }

    public function logout (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
      }

      public function dashboard(){
        $user = Auth::user();

        $name=$user->name;

        return view('dashboard',compact('name'));

      }
}
