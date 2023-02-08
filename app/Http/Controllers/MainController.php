<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    // rotta non protetta 
    public function home(){

        return view ('pages.home');
    }


    // rotta protetta

    public function logged(){

        return view('pages.logged');
    }

    
}
