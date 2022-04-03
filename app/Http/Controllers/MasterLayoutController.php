<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterLayoutController extends Controller
{
    function Show(){
        return view('HomeMasterLayout');
    }
}
