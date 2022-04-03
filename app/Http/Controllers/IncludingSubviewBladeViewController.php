<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncludingSubviewBladeViewController extends Controller
{
    function Show(){
        $Data = array('nayon','makin','mamun','pulak');
        return view('IncludingSubviewBladeView',['DataKey'=>$Data]);
    }
}
