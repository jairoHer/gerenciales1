@extends('layout')
@section('title', 'Index')
@section('header')
@section('contenido')

<div>
    <h1>Nuevo Proveedor</h1>
</div>
<form action="{!! action('ComprasController@agregar_proveedor') !!}" method="post" class="form-group">
    @csrf
      <label>Ingrese el Nombre del proveedor:</label><br>
      <input type="text" name="nombre" style="width:500px;"><br>
      <label>Ingrese el correo del proveedor:</label><br>
      <input type="text" name="correo" style="width:500px;"><br>
      <label>Ingrese el telefono:</label><br>
      <input type="text" name="telefono" style="width:500px;"><br>
      <div class="form-group">
          <button type="submit" class="btn btn-success">Agregar</button>
      </div>
</form>
    @endsection