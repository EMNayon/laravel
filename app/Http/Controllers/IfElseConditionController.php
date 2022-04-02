<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IfElseConditionController extends Controller
{
    function Show(){
        $LoginStatus = true;
        return view('IfElseCondition',[
            'LoginStatusKey' => $LoginStatus
        ]);
    }
}
