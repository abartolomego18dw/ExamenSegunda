@extends('layouts.app')

@section('title', 'Examen 2.eval')

@section('content')

  <h2>Total de alumnos/as: </h2>
  <h3>Listado de alumnos/as menores de edad</h2>

  <table>
    <tr>

      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fecha Nacimiento</th>
      <th>Email</th>
    </tr>
    
      @foreach ($alumnos as $alumno)
      <tr>

      <td>{{$alumno->nombre}}</td>
      <td>{{$alumno->apellido}}</td>
      <td>{{$alumno->fechanacimiento}}</td>
      <td>{{$alumno->email}}</td>

      </tr>
      @endforeach
    
    
  </table>


  @endsection
    