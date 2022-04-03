<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopPropertiesBladeViewController extends Controller
{
    function Show(){
        $Data = array('Makin','Nayem','Mamun','Pulak','Nuru','Nayon','Siddik','Juwel','Jakir');
        return view('LoopPropertiesBladeView',[
            'DataKey' => $Data
        ]);
    }
}
