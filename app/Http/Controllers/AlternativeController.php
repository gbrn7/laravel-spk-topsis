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

    public function store(Request $request){
        $newAlternative = $request->except('_token');
        $request->validate([
            'name' => 'required|string',
        ]);
        Alternative::create($newAlternative);
        return redirect()->route('alternatives')->with('toast_success', 'Alternatif '.$request->name.' ditambahkan!');
    }

    public function delete(Request $request){
        $alternative = Alternative::find($request->id);
        $alternative->delete();
        return redirect()->route('alternatives')->with('toast_success', 'Alternatif '.$alternative->name.' dihapus!');
    }

    public function update(Request $request){
        $oldAlternative = Alternative::find($request->id);
        $updatedAlternative = $request->except('_token');
        $oldAlternative->update($updatedAlternative);

        return redirect()->route('alternatives')->with('toast_success', 'Alternatif '.$request->name.' diperbarui!');
    }
}
