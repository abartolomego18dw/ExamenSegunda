<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Empresa;

class FctController extends Controller
{
    public function index()
    {
        
    	$alumnos = Alumno::all();
    	$empresas = Empresa::all();
    	foreach($alumnos->empresas as $empresa){
    		$nombre=$empresa->name;
    	}

    	return view('fct/index', ['alumnos'=>$alumnos, 'empresas'=>$empresas]);
        		
	}
}
