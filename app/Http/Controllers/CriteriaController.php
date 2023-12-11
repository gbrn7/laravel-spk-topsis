<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;

class CriteriaController extends Controller
{
    public function index(){
        $criteria = Criteria::all();
        $columns = (new Criteria)->getTableColumns();
        return view('criteria', ['criteria' => $criteria]);
    }
}
