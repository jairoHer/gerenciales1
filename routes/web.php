<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');
#RRHH
Route::get('/gestion_personal', 'GestionPersonalController@index');
Route::get('/nuevo_empleado', 'GestionPersonalController@nuevo');
Route::get('/horario', 'GestionPersonalController@horario');
#Compras
Route::get('/proveedores', 'ComprasController@index');
Route::get('/nuevo_proveedor', 'ComprasController@nuevo');
Route::get('/recibos', 'ComprasController@ver_recibos');

Route::post('/proveedores','ComprasController@agregar_proveedor');
#RRHH
Route::post('/gestion_personal','GestionPersonalController@agregar_empleado');
Route::post('/horario','GestionPersonalController@horario_empleados');