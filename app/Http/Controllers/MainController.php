<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'relase_date' => 'required|date',
            'repo_link' => 'required|string'
        ]);

        // per rendere l'immagine persistente
        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;

        $auth = Auth::create($data);
        $auth->save();
        return redirect()->route('logged');
    }

    // --- DELETE

    public function authDelete(Auth $auth)
    {

        $auth->delete();
        return redirect()->route('logged');
    }

    // --- EDIT

    public function authEdit(Auth $auth)
    {
        return view('pages.edit', compact('auth'));
    }

    // --- UPDATE

    public function authUpdate(Request $request, Auth $auth)
    {
        $data = $request->validate([
            'name' => 'required|string|max:64',
            'description' => 'required|string',
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'relase_date' => 'required|date',
            'repo_link' => 'required|string'
        ]);

        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;

        $auth->update($data);
        return redirect()->route('home');
    }


    ///---- SHOW
    
    public function authShow(Auth $auth){

        return view('pages.show', compact('auth'));
    }
}
