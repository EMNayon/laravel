<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeachLoopBladeViewController extends Controller
{
    function DropDown(){
        $Data = array('Bangladesh','India','Canada','America');
        return view('ForeachLoopBladeViewController',[
            'DataKey' => $Data
        ]);
    }
}
