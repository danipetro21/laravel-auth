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
        return view('pages.home', compact('auths'));
    }

    // rotta protetta

    public function logged()
    {
        $auths = Auth::orderBy('created_at', 'DESC')->get();
        return view('pages.logged', compact('auths'));
    }

    // --- CREATE | STORE

    public function authCreate()
    {
        return view('pages.create');
    }

    // --- STORE
    public function authStore(Request $request)
    {

        //--- validazione dei dati lato backend
        $data = $request->validate([
            'name' => 'required|string|max:64',
            'description' => 'required|string',
            'main_image' => 'required|string',
            'relase_date' => 'required|date',
            'repo_link' => 'required|string'
        ]);

        $auth = Auth :: create($data);     
        $auth->save();
        return redirect()->route('logged');
    }
}
