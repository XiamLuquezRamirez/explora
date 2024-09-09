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
Route::post('/departamentos/listaDepartamento', [DepartamentoController::class, 'listaDepartamento'])->name('departametos.listaDepartamentos');
Route::post('/departamentos/VisualizacionDepartamentos', [DepartamentoController::class, 'visualizacionDepartamento'])->name('departametos.VisualizacionDepartamentos');
Route::post('/departamentos/guardarDepartamento', [DepartamentoController::class, 'guardarDepartamento'])->name('form.handle');
Route::post('/registros', [DepartamentoController::class, 'listadoRegistros'])->name('registros.list');
Route::post('/etnias/guardar', [DepartamentoController::class, 'guardarEtnias'])->name('form.guardarEtnias');
Route::post('/etnias/busq', [DepartamentoController::class, 'busquedaEtnias'])->name('etnias.buscaEtnia');
Route::post('/festividad/buscaFesti', [DepartamentoController::class, 'busquedaFestividad'])->name('festividad.buscaFesti');
Route::post('/etnias/eliminar', [DepartamentoController::class, 'eliminarEtnias'])->name('etnias.eliminarEtnia');
Route::post('/festividad/guardar', [DepartamentoController::class, 'guardarFestividad'])->name('form.guardarFestividad');
Route::post('/festividad/eliminar', [DepartamentoController::class, 'eliminarFestividad'])->name('festividad.eliminarFestividad');
Route::post('/sitios/guardar', [DepartamentoController::class, 'guardarSitios'])->name('form.guardarSitio');
Route::post('/sitios/buscaSitios', [DepartamentoController::class, 'busquedaSitio'])->name('sitios.buscaSitios');
Route::post('/sitios/eliminar', [DepartamentoController::class, 'eliminarSitio'])->name('sitio.eliminarSitio');
Route::post('/personajes/guardar', [DepartamentoController::class, 'guardarPersonaje'])->name('form.guardarPersonaje');
Route::post('/personajes/buscaPersonajes', [DepartamentoController::class, 'busquedaPersonaje'])->name('personajes.buscaPersonaje');
Route::post('/personajes/eliminar', [DepartamentoController::class, 'eliminarPersonaje'])->name('personajes.eliminarPersonaje');
Route::post('/departamento/eliminar', [DepartamentoController::class, 'eliminarDepartamento'])->name('departamento.eliminarDepartamento');
Route::post('/departamentos/buscaDepartamento', [DepartamentoController::class, 'busquedaDepartamento'])->name('departamento.buscaDepartamentos');


//PREGUNTAS
Route::post('/preguntas/guardar', [DepartamentoController::class, 'guardarPreguntas'])->name('form.guardarPregunta');
Route::post('/departamentos/VisualizacionPreguntasDepartamento', [DepartamentoController::class, 'VisualizacionPreguntas'])->name('departametos.VisualizacionPreguntasDepartamento');
Route::post('/preguntas/busq', [DepartamentoController::class, 'busquedaPregunta'])->name('preguntas.buscaPregunta');
Route::post('/preguntas/eliminar', [DepartamentoController::class, 'eliminarPreguntas'])->name('preguntas.eliminarPregunta');


