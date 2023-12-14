<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:5'
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', join(', ', $validator->messages()->all()))->withInput();
        }

        $data = $request->except('_token');;
        $data['role'] = 'member'; //adding the array
        $data['password'] = Hash::make($request->password); //hash password and override array
        
        // dd($data);
        User::create($data);

        return redirect()->route('signIn')->with('toast_success', 'Pendaftaran Berhasil!');
    }}
