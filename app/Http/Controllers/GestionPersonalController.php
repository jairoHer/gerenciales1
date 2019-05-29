<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GestionPersonalController extends Controller
{
    public function index(){
    	$empleados = DB::select("select cui, nombre, telefono, correo from empleado order by nombre desc");
        return view('personal',['empleados' => $empleados]);
    }
    public function nuevo(){
    	
        return view('nuevo_empleado');
    }
    public function agregar_empleado(Request $request){
    	\DB::table('empleado')->insertGetId([
    		'cui'=> $request->cui,
    		'nombre' => $request->nombre,
    		'telefono' => $request->telefono,
    		'correo' => $request->correo
    	]);
               
    	return redirect('\gestion_personal');
    }
    public function horario(){
    	$horarios = DB::select("select tipoJornada from Jornada order by tipoJornada desc");

    	return view('horario');
    }

    public function horario_empleados(Request $request){
    	$empleados = DB::select("select Id_Empleado, cui, nombre, telefono, correo, estado from empleado order by nombre desc");

    	$horarios = \DB::table('horario')->where('Id_Jornada',"=",$request->Id_Jornada)->get();
    	$jornada = $request->Id_Jornada;
    	return view('horario',['empleados'=>$empleados,'horarios'=>$horarios, 'jornada'=>$jornada]);
    }
}