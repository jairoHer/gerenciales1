@extends('layout')
@section('title', 'Index')
@section('header')
@section('contenido')

<div>
    <h1>Gestion del personal</h1>

</div>
<a class="btn btn-primary" href="{{url('/nuevo_empleado')}}" role="button">Agregar empleado</a>
<table class="table table-striped">
        <thead>
            <tr>
                <th>CUI</th>
                <th>Nombre</th>                
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($empleados))
            @foreach($empleados as $empleado)
            <tr>
                <td> {{ $empleado->cui }} </td>
                <td> {{ $empleado->nombre }} </td>
                <td> {{ $empleado->telefono }} </td>
                <td> {{ $empleado->correo }} </td>
            @endforeach
            @endif
        </tbody>
    </table>
    @endsection