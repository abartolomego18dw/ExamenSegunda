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

	  @foreach($alumnos as $alumno)


	  <tr>
	  	
	  	<td>{{$alumno->id}}</td>
	  	<td>{{$alumno->nombre}}</td>
	  	<td>{{$alumno->apellido}}</td>

	  	@foreach($alumno->empresas as $empresa)

	  	<td>{{$empresa->pivot->fechainicio}}</td>
	  	<td>{{$empresa->pivot->fechafin}}</td>
	  	<td>{{$empresa->pivot->valoracionalumno}}</td>
	  	<td>{{$empresa->pivot->valoracionempresa}}</td>

	  	@endforeach

	  </tr>

	  @endforeach
	  
	</table>	
	  	

	

@endsection