@extends('layout')
@section('title', 'Index')
@section('header')
@section('contenido')

<div>
    <h1>Jornadas laborales</h1>
</div>
    <form action="{!! action('GestionPersonalController@horario_empleados') !!}" method="post" class="form-group">
	  @csrf
	   <div class="form-group">
	    <label for="sel1">Seleccione la jornada:</label>
	    <select class="form-control" id="sel1" name="Id_Jornada">
	      <option value="1">Matutina</option>
	      <option value="2">Vespertina</option>
	      <option value="3">Nocturna</option>
	  </select>
	  </div>
	  <div class="form-group">
	          <button type="submit" class="btn btn-success">buscar empleados</button>
	  </div>
	</form>
@if(isset($empleados) && isset($horarios))
    	<table class="table table-striped">
        <thead>
            <tr>
                <th>CUI</th>
                <th>Nombre</th>                
                <th>Telefono</th>
                <th>Correo</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($empleados))
            @foreach($empleados as $empleado)
            @foreach($horarios as $horario)
            @if($empleado->Id_Empleado == $horario->Id_Empleado)
            <tr>
                <td> {{ $empleado->cui }} </td>
                <td> {{ $empleado->nombre }} </td>
                <td> {{ $empleado->telefono }} </td>
                <td> {{ $empleado->correo }} </td>
                <td>
                	@if($empleado->estado == 'A')
                		Activo
                	@elseif($empleado->estado == 'I')
                		Inactivo
                	@elseif($empleado->estado == 'V')
                		De Vacaciones
                	@endif
                </td>
            @endif
            @endforeach 
            @endforeach
            @endif
        </tbody>
    </table>
@else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Jornada</th>
                <th>Horario</th>                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> Matutina </td>
                <td> 8:00 - 16:00 </td>
            </tr>
            <tr>
                <td> Vespertina </td>
                <td> 13:00 - 22:00 </td>
            </tr>
            <tr>
                <td> Nocturna </td>
                <td> 20:00 - 6:00 </td>
            </tr>
        </tbody>
    </table>
@endif


    
 @endsection