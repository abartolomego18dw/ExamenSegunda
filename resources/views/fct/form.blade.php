@extends('layouts.app')

@section('title', 'FCT')

@section('content')

<h3>Listado de alumnos en empresa: EMPRESA</h3>
<h4>Selecciona la fecha de inicio y fin para realizar la consulta</h3>
  <form action="" method="">
    @csrf
    Fecha Inicio:<br>
    <input type="date" name="fechainicio" value="">
    <br><br>
    Fecha Fin:<br>
    <input type="date" name="fechafin" value="">
    <br><br>
    <button type="submit" name="submit">Buscar</button>
  </form>
  <br>

@endsection