<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CalculationController;
use App\Models\Alternative;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;

class ResultController extends Controller
{
    public function index(){

        $calculatioObj = new CalculationsController;
        $alternatives = Alternative::all();
        $decisionMatrix = $calculatioObj->getDecisionMatrix();
        $normMatrix = $calculatioObj->norm($decisionMatrix);
        $weightedNorm = $calculatioObj->getWeightedNorm($normMatrix);
        $idealPositive = $calculatioObj->getIdealPositive($weightedNorm);
        $idealNegative = $calculatioObj->getIdealNegative($weightedNorm);
        $solutionPositive = $calculatioObj->getSolutionPositive($weightedNorm, $idealPositive);
        $solutionNegative = $calculatioObj->getSolutionNegative($weightedNorm, $idealNegative);
        $PreferenceValue = $calculatioObj->getPreferenceValue($solutionPositive, $solutionNegative);
        $pairedValues = $this->pairingValues($PreferenceValue, $alternatives);
        $sortedResults = $this->getSortedResult($pairedValues, 'grade', 0);
        return view('result', compact('sortedResults'));
    }

    public function pairingValues($PreferenceValue, $alternatives){
        $result = [];
        for ($i=0; $i < count($alternatives); $i++) { 
            array_push($result, (object)[
                'id' => $alternatives[$i]->id,
                'code' => 'A'.$i+1,
                'name' => $alternatives[$i]->name,
                'grade' => $PreferenceValue[$i],
            ]);
        }

        // dd($result);
        return $result;
    }

    public function getSortedResult($pairedValues, $sortBy, Bool $asc){
        if($asc){
            $sortedResult = collect($pairedValues)->sortBy($sortBy);
        }else{
            $sortedResult = collect($pairedValues)->sortByDesc($sortBy);
        }

        for ($i=0; $i < count($sortedResult); $i++) { 
            $sortedResult[$i]->rank = $i + 1;
        }

        // dd($sortedResult);
        return $sortedResult;
    }
}
