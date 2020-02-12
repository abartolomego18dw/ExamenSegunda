<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;



class FotoController extends Controller
{
    public function index()
    {	
    	$usuario=Auth::user();

    return view('foto/index')->with('usuario', $usuario);
    }
    public function create(Request $request) {

    	$usuario=Auth::user();

    if(Auth::user()){
       $usuario->img = $request->file('image')->store('public');
       $usuario->save();


		return redirect('foto')->with('usuario', $usuario);
     
    }
    else{
        return redirect('login');
    }
}
}
