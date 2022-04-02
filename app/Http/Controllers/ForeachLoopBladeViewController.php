<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeachLoopBladeViewController extends Controller
{
    function DropDown(){
        $Data = array('Bangladesh','India','Canada','America');
        $Fruits = array('Banana','Mango','Jack-fruit','Goava');
        return view('ForeachLoopBladeViewController',[
            'DataKey' => $Data,
            'FruitsKey' => $Fruits
        ]);
    }
}
