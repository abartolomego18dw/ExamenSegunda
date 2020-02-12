<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Empresa;

class FctController extends Controller
{
    public function index($id)
    {
        
    	$empresa = Empresa::where('id',$id)->get();
    	
    	

    	return view('fct/index')->with(['empresa'=>$empresa]);
        		
	}
}
