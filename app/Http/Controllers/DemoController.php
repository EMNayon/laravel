<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function myName($namevalue){
        return $namevalue;
    }
    function fullName($firstName,$lastName){
        return $firstName." ".$lastName;
    }
    function fullName1($firstName,$middleName,$lastName){
        // return $firstName." ".$middleName." ".$lastName;
        return view('DemoView',[
            'firstKey' => $firstName,
            'middleKey' => $middleName,
            'lastKey' => $lastName
        ]);
    }
}
