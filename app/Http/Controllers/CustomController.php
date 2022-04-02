<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    function MySelf(){
        return "I love programming.";
    }
    function YourSelf(){
        return "You love programming";
    }
}
