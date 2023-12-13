<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index(){

        auth()->user() ? redirect()->route('dashboard')  : null; 

        return view('auth');
    }

    public function authenticate(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }
        
        return back()->with('toast_error', 'Email or Password Incorrect')->withInput();
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('signin');
    }
}
