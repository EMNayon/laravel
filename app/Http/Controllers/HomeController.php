<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowHome(){
        $NewsHeadLine = "<h1>Bangladesh won By 100 Runs</h1>";
        $XSS = "<script>alert('attack')</script>";
        return view('Home',[
            'NewsHeadLineKey'=>$NewsHeadLine,
            'XSSKey' => $XSS
        ]);
    }
}
