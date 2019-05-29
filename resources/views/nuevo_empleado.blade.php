@extends('layout')
@section('title', 'Index')
@section('header')
@section('contenido')

<div>
    <h1>Nuevo Empleado</h1>
</div>
<form action="{!! action('GestionPersonalController@agregar_empleado') !!}" method="post" class="form-group">
    @csrf
      <label>Ingrese el CUI:</label><br>
      <input type="text" name="cui" style="width:500px;"><br>
      <label>Ingrese el nombre del empleado:</label><br>
      <input type="text" name="nombre" style="width:500px;"><br>
      <label>Ingrese el telefono:</label><br>
      <input type="text" name="telefono" style="width:500px;"><br>
      <label>Ingrese el correo:</label><br>
      <input type="text" name="correo" style="width:500px;"><br>
      <div class="form-group">
          <button type="submit" class="btn btn-success">Agregar</button>
      </div>
</form>
    @endsection