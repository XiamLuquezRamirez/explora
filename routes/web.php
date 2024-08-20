<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\DepartamentoController;
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

Route::get('/', function () {
    return view('Usuario.login');
});

///INICIO DE SESIÓN
Route::post('/Login', [UsuariosController::class,'Login']);
Route::get('/Administracion', [UsuariosController::class,'Administracion']);
Route::get('/Logout', [UsuariosController::class,'Logout']);

//GESTIONAR DEPARTAMENTO
Route::get('/AdminDepartamento/Gestionar', [DepartamentoController::class,'Departamentos']);
Route::get('/departamentos/list', [DepartamentoController::class, 'list'])->name('departamentos.list');
Route::post('/departamentos/guardarDepartamento', [DepartamentoController::class, 'guardarDepartamento'])->name('form.handle');
Route::post('/registros', [DepartamentoController::class, 'listadoRegistros'])->name('registros.list');
Route::post('/etnias/guardar', [DepartamentoController::class, 'guardarEtnias'])->name('form.guardarEtnias');
Route::post('/etnias/busq', [DepartamentoController::class, 'busquedaEtnias'])->name('etnias.buscaEtnia');
Route::post('/festividad/buscaFesti', [DepartamentoController::class, 'busquedaFestividad'])->name('festividad.buscaFesti');
Route::post('/etnias/eliminar', [DepartamentoController::class, 'eliminarEtnias'])->name('etnias.eliminarEtnia');
Route::post('/festividad/guardar', [DepartamentoController::class, 'guardarFestividad'])->name('form.guardarFestividad');
Route::post('/festividad/eliminar', [DepartamentoController::class, 'eliminarFestividad'])->name('festividad.eliminarFestividad');
