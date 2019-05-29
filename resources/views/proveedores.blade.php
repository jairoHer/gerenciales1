@extends('layout')
@section('title', 'Index')
@section('header')
@section('contenido')

<div>
    <h1>Proveedores</h1>
     
</div>
<a class="btn btn-primary" href="{{url('/nuevo_proveedor')}}" role="button">Agregar Proveedor</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th>Proveedor</th>
                <th>Correo</th>                
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($proveedors))
            @foreach($proveedors as $proveedor)
            <tr>
                <td> {{ $proveedor->nombre }} </td>
                <td> {{ $proveedor->correo }} </td>
                <td> {{ $proveedor->telefono }} </td>
            @endforeach
            @endif
        </tbody>
</table>
    @endsection