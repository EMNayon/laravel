<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncludingSubviewBladeViewController extends Controller
{
    function Show(){
        return view('IncludingSubviewBladeView');
    }
}
