<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phpInsideBladeViewController extends Controller
{
    function Show(){
        return view('phpInsideBladeView');
    }
}
