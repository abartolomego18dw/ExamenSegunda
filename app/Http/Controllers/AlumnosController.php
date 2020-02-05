<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;



class AlumnosController extends Controller
{
    public function index()
    {	

    	$alumnos=Alumno::orderBy('apellido', 'ASC')->get();


        return view('alumnos/index')->with('alumnos', $alumnos);
    }
}
