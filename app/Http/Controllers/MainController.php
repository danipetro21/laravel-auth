<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{

    // rotta non protetta 
    public function home()
    {
        $auths = Auth::orderBy('created_at', 'DESC')->get();
        return view('pages.home' , compact('auths'));
    }

    // rotta protetta

    public function logged()
    {

        return view('pages.logged');
    }
}
