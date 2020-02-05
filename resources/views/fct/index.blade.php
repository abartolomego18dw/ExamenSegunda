@extends('layouts.app')

@section('title', 'FCT')

@section('content')

<h3>Listado de alumnos en empresa: EMPRESA</h3>

  <form action="" method="">
    @csrf
    Fecha Inicio:<br>
    <input type="date" name="fechainicio" value="{{old('fechainicio')}}">
    <br><br>
    Fecha Fin:<br>
    <input type="date" name="fechafin" value="{{old('fechafin')}}">
    <br><br>
    <button type="submit" name="submit">Buscar</button>
  </form>
  <br>

	<table>
	  <tr>
	    <th>Id</th>
	    <th>Nombre</th>
	    <th>Apellido</th>
	    <th>Fecha Inicio</th>        
	    <th>Fecha Fin</th>        
	    <th>Valoracion Alumno</th>        
	    <th>Valoracion Empresa</th>        
	  </tr>
	  
	</table>	
	  	

	<h4>Si no ha habido alumnos indicar: "En ese periodo de fechas ningun alumno/a efectuó las prácticas en esta empresa".</h4>

@endsection