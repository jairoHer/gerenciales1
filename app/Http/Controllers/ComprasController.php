<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ComprasController extends Controller
{
    public function index(){
        $proveedors = DB::select("select nombre, correo,  telefono from proveedor order by nombre desc");
        return view('proveedores',['proveedors' => $proveedors]);
    }
    public function nuevo(){
    	
        return view('new_proveedor');
    }
    public function agregar_proveedor(Request $request){
    	\DB::table('proveedor')->insertGetId([
    		'nombre' => $request->nombre,
    		'correo' => $request->correo,
    		'telefono' => $request->telefono
    	]);
               
    	return redirect('\proveedores');
    }
    public function ver_recibos(){
         $facturas = DB::select("select DISTINCT codigo_factura, fecha from factura order by fecha");
        return view('recibo',['facturas' => $facturas]);
    }
}