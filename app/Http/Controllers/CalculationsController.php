<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alternative;
use App\Models\GradeAlternativeCriteria as Grade;


class CalculationsController extends Controller
{
    public function index(){
        $decisionMatrix = $this->getDecisionMatrix();
        $normMatrix = $this->norm($decisionMatrix);
        dd($normMatrix);
    }

    public function getDecisionMatrix(){
        $alternatives = Alternative::all();

        $matrix = [];
        foreach ($alternatives as $key => $alternative) {
           $GradesData = Grade::where('alternative_id', '=', $alternative->id)
           ->orderBy('criteria_id', 'asc')
           ->get();

           $temp = [];
           foreach ($GradesData as $key2 => $Gradedata) {
            array_push($temp, $Gradedata->grade);
           }
           array_push($matrix, $temp);
        }

        return $matrix;
    }

    public function norm($arr){
        $divider = $this->getNormDivider($arr);
        $result = [];
        for ($i=0; $i < count($arr); $i++) { 
            $temp = [];
            for ($j=0; $j < count($arr[$i]); $j++) { 
                array_push($temp, $arr[$i][$j]/$divider[$i]);
            }
            // dd($arr, $divider, $temp);
            array_push($result, $temp);
        }
        // dd($arr, $divider, $result);
        return $result;
    }

    public function getNormDivider($arr){
        $result = [];
        foreach ($arr as $key => $value) {
            $temp = 0;
            foreach ($value as $key2 => $value2) {
                $temp = $temp + ($value2 ** 2);
            }
            // dd(count($value));
            if($temp !== 0){
                array_push($result, sqrt($temp));
            }else{
                array_push($result, sqrt($temp));
            }
        }
        // dd( $arr, $result);
        return $result;
    }

}
