@extends('layouts.app')

@section('title', 'Examen 2.eval')

@section('content')

  <h2>User</h2>
  <img src="" alt="Imagen"><br><br>
  <form action="" method="">
      @csrf
      <div class="form-group">
          <label>Selecciona una nueva imagen</label>
          <input type="file" name="image">
      </div>
      <br>
      <div>
          <input type="submit" value="Subir imagen" class="boton">
      </div>
  </form>

  @endsection
    