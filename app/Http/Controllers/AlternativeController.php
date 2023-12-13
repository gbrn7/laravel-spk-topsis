<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;

class AlternativeController extends Controller
{
    public function index(){
        $alternatives = Alternative::all();
        
        return view('alternative', compact('alternatives'));
    }
}
