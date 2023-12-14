<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;
use App\Models\Alternative;
use App\Models\GradeAlternativeCriteria;
use RealRashid\SweetAlert\Facades\Alert;

class CriteriaController extends Controller
{
    public function index(){
        $criteria = Criteria::all();
        $columns = (new Criteria)->getTableColumns();

        return view('criteria', ['criteria' => $criteria]);
    }

    public function store(Request $request){
        $newCriteria = $request->except('_token');
        $request->validate([
            'name' => 'required|string',
            'weight' => 'required|numeric|min:0',
            'benefited' => 'required|numeric|min:0|max:1',
        ]);
        $newCriteria = Criteria::create($newCriteria);

        $allAlternative = Alternative::all();
        $gradeData = [];
        foreach ($allAlternative as $alternative) {
            array_push($gradeData, [
                'alternative_id' => $alternative->id,
                'criteria_id' => $newCriteria->id,
                'grade' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $gradeDataa = GradeAlternativeCriteria::insert($gradeData);
        return redirect()->route('criteria')->with('toast_success', 'Kriteria '.$request->name.' ditambahkan!');
    }

    public function delete(Request $request){
        $criteria = Criteria::find($request->id);
        $criteria->delete();
        return redirect()->route('criteria')->with('toast_success', 'Kriteria '.$criteria->name.' dihapus!');
    }

    public function update(Request $request){
        $oldCriteria = Criteria::find($request->id);
        $updatedCriteria = $request->except('_token');
        $oldCriteria->update($updatedCriteria);

        return redirect()->route('criteria')->with('toast_success', 'Kriteria '.$request->name.' diperbarui!');
    }
}
