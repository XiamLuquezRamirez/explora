<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class Departamento extends Model
{
    public static function listDepartamentos()
    {
        return DB::connection('mysql')->table('list_departamentos')
            ->get();
    }
    public static function busquedaEtnias($idEtnia)
    {
        return DB::connection('mysql')->table('departamento_etnografia_list')
            ->where("id", $idEtnia)
            ->first();
    }
    public static function busquedaPreguntas($idPreg)
    {
        return DB::connection('mysql')->table('preguntas')
            ->where("id", $idPreg)
            ->first();
    }
    public static function busquedaOpcionesPregunta($idPreg)
    {
        return DB::connection('mysql')->table('opciones_multiple')
            ->where("pregunta", $idPreg)
            ->get();
    }
    public static function busquedaOpcionVerFal($idPreg)
    {
        return DB::connection('mysql')->table('opciones_verfal')
            ->where("pregunta", $idPreg)
            ->first();
    }
    public static function busquedaFestividad($idFesti)
    {
        return DB::connection('mysql')->table('departamento_festividad_list')
            ->where("id", $idFesti)
            ->first();
    }

    public static function busquedaDescripcion($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_descripcion')
            ->where("id", $idDepartamento)
            ->first();
    }

    public static function busDetDescripcion($idDepartamento)
    {
        return DB::connection('mysql')->table('list_departamentos')
            ->where("id", $idDepartamento)
            ->first();
    }
    public static function busquedaHistoria($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_historia')
            ->where("departamento", $idDepartamento)
            ->first();
    }
    public static function busquedaGeografia($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_geografia')
            ->where("departamento", $idDepartamento)
            ->first();
    }

    public static function busquedaHidrografia($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_hidrografia')
            ->where("departamento", $idDepartamento)
            ->first();
    }

    public static function busquedaClima($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_clima')
            ->where("departamento", $idDepartamento)
            ->first();
    }
    public static function busquedaDemografia($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_demografia')
            ->where("departamento", $idDepartamento)
            ->first();
    }
    public static function busquedaEtnografia($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_etnografia')
            ->where("departamento", $idDepartamento)
            ->first();
    }
    public static function busquedaFaunaFlora($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_fauna_flora')
            ->where("departamento", $idDepartamento)
            ->first();
    }
    public static function busquedaEconomia($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_economia')
            ->where("departamento", $idDepartamento)
            ->first();
    }
    public static function busquedaCultura($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_cultura')
            ->where("departamento", $idDepartamento)
            ->first();
    }

    public static function busquedaGastronomia($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_gastronomia')
            ->where("departamento", $idDepartamento)
            ->first();
    }
    public static function busquedaCapital($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_capital')
            ->where("departamento", $idDepartamento)
            ->first();
    }
    public static function busquedaReferencia($idDepartamento)
    {
        return DB::connection('mysql')->table('departamento_referencia')
            ->where("departamento", $idDepartamento)
            ->first();
    }

    public static function busquedaSitio($idSitio)
    {
        return DB::connection('mysql')->table('departamento_sitios_list')
            ->where("id", $idSitio)
            ->first();
    }
    public static function busquedaFauna($idFauna)
    {
        return DB::connection('mysql')->table('departamento_fauna_list')
            ->where("id", $idFauna)
            ->first();
    }
    public static function busquedaFlora($idFlora)
    {
        return DB::connection('mysql')->table('departamento_flora_list')
            ->where("id", $idFlora)
            ->first();
    }
    public static function busquedaPersonaje($idPersonaje)
    {
        return DB::connection('mysql')->table('departamento_personaje_list')
            ->where("id", $idPersonaje)
            ->first();
    }
    public static function listDepartamentosRegistros($request)
    {
        if ($request['idform'] == 'etnografia') {
            return DB::connection('mysql')->table('departamento_etnografia_list')
                ->where("departamento", $request['idDepartamento'])
                ->get();
        } else if ($request['idform'] == 'festividad') {
            return DB::connection('mysql')->table('departamento_festividad_list')
                ->where("departamento", $request['idDepartamento'])
                ->get();
        } else if ($request['idform'] == 'Sitios') {
            return DB::connection('mysql')->table('departamento_sitios_list')
                ->where("departamento", $request['idDepartamento'])
                ->get();
        } else if ($request['idform'] == 'personajes') {
            return DB::connection('mysql')->table('departamento_personaje_list')
                ->where("departamento", $request['idDepartamento'])
                ->get();
        } else if ($request['idform'] == 'fauna') {
            return DB::connection('mysql')->table('departamento_fauna_list')
                ->where("departamento", $request['idDepartamento'])
                ->get();
        } else if ($request['idform'] == 'flora') {
            return DB::connection('mysql')->table('departamento_flora_list')
                ->where("departamento", $request['idDepartamento'])
                ->get();
        }
    }

    public static function GuardaeDescripcionDepart($request)
    {
        try {

            if ($request['idDescripcion'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_descripcion')->insertGetId([
                    'departamento' => $request['departamento'],
                    'poblacion' => $request['poblacion'],
                    'clima' => $request['clima'],
                    'temperatura' => $request['temperatura'],
                    'extension' => $request['extension'],
                    'contenido' => $request['contenido'],
                    'geografia' => $request['contenidoGeografia'],
                    'actividad_economica' => $request['contenidoActividadEconomica'],
                    'bandera' => $request['contenidoBandera'],
                    'escudo' => $request['contenidoEscudo'],
                    'estado' => 'ACTIVO',
                    'estado_registro' => 'INCOMPLETO'
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_descripcion')
                    ->where("id", $request['idDescripcion'])
                    ->update([
                        'poblacion' => $request['poblacion'],
                        'clima' => $request['clima'],
                        'temperatura' => $request['temperatura'],
                        'extension' => $request['extension'],
                        'contenido' => $request['contenido'],
                        'geografia' => $request['contenidoGeografia'],
                        'actividad_economica' => $request['contenidoActividadEconomica'],
                        'bandera' => $request['contenidoBandera'],
                        'escudo' => $request['contenidoEscudo']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarHistoriaDepart($request)
    {
        try {
            if ($request['idHistoria'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_historia')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'historia' => $request['contenidoHistoria']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_historia')
                    ->where("id", $request['idHistoria'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'historia' => $request['contenidoHistoria']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarGeografiaDepart($request)
    {
        try {
            if ($request['idGeografia'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_geografia')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'ubicacion' => $request['contenidoUbicacion'],
                    'coordenadas' => $request['contenidoCoordenadas'],
                    'limites' => $request['contenidoLimites'],
                    'relieve' => $request['contenidoRelieve']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_geografia')
                    ->where("id", $request['idGeografia'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'ubicacion' => $request['contenidoUbicacion'],
                        'coordenadas' => $request['contenidoCoordenadas'],
                        'limites' => $request['contenidoLimites'],
                        'relieve' => $request['contenidoRelieve']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarHidrografiaDepart($request)
    {
        try {
            if ($request['idHidrografia'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_hidrografia')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'hidrografia' => $request['contenidoHidrografia']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_hidrografia')
                    ->where("id", $request['idHidrografia'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'hidrografia' => $request['contenidoHidrografia']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }
    public static function GuardarClimaDepart($request)
    {
        try {
            if ($request['idClima'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_clima')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'clima' => $request['contenidoClima']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_clima')
                    ->where("id", $request['idClima'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'clima' => $request['contenidoClima']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarDemografiaDepart($request)
    {
        try {
            if ($request['idDemografia'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_demografia')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'poblacion' => $request['contenidoPoblacion'],
                    'densidad' => $request['contenidoDensidad'],
                    'subregiones' => $request['contenidoSubregiones']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_demografia')
                    ->where("id", $request['idDemografia'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'poblacion' => $request['contenidoPoblacion'],
                        'densidad' => $request['contenidoDensidad'],
                        'subregiones' => $request['contenidoSubregiones']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarEtnografiaDepart($request)
    {
        try {
            if ($request['idEtnografia'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_etnografia')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'contenido' => $request['contenidoEtnoHistoria']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_etnografia')
                    ->where("id", $request['idEtnografia'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'contenido' => $request['contenidoEtnoHistoria']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarEconomiaDepart($request)
    {
        try {
            if ($request['idEconomia'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_economia')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'economia' => $request['contenidoEconomia']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_economia')
                    ->where("id", $request['idEconomia'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'economia' => $request['contenidoEconomia']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarCulturaDepart($request)
    {
        try {
            if ($request['idCultura'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_cultura')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'descripcion' => $request['contenidoCultura'],
                    'arte' => $request['contenidoArte'],
                    'danza' => $request['contenidoDanza'],
                    'musica' => $request['contenidoMusica']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_cultura')
                    ->where("id", $request['idCultura'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'descripcion' => $request['contenidoCultura'],
                        'arte' => $request['contenidoArte'],
                        'danza' => $request['contenidoDanza'],
                        'musica' => $request['contenidoMusica']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarFaunafloraDepart($request)
    {
        try {
            if ($request['idFauFlora'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_fauna_flora')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'fauna' => $request['contenidoFauna'],
                    'flora' => $request['contenidoFlora']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_fauna_flora')
                    ->where("id", $request['idFauFlora'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'fauna' => $request['contenidoFauna'],
                        'flora' => $request['contenidoFlora']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarGastronomiaDepart($request)
    {
        try {
            if ($request['idGastronomia'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_gastronomia')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'gastronomia' => $request['contenidoGastronomia']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_gastronomia')
                    ->where("id", $request['idGastronomia'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'gastronomia' => $request['contenidoGastronomia']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }
    public static function GuardarCapitalDepart($request)
    {
        try {
            if ($request['idCapital'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_capital')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'capital' => $request['contenidoCapital']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_capital')
                    ->where("id", $request['idCapital'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'capital' => $request['contenidoCapital']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }
    public static function GuardarReferenciaDepart($request)
    {
        try {
            if ($request['idReferencia'] === null) {
                $respuesta = DB::connection('mysql')->table('departamento_referencia')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'referencia' => $request['contenidoReferencia'],
                    'webgrafia' => $request['contenidoWebgrafia']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_referencia')
                    ->where("id", $request['idReferencia'])
                    ->update([
                        'departamento' => $request['idDepartamento'],
                        'referencia' => $request['contenidoReferencia'],
                        'webgrafia' => $request['contenidoWebgrafia']
                    ]);

                $respuesta = $request['idDepartamento'];
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function UpdateEstadoDepart($request)
    {
        try {
            $respuesta = DB::connection('mysql')->table('departamento_descripcion')
                ->where('id', $request['idDepartamento'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                ->update([
                    'estado_registro' => 'COMPLETO'
                ]);

            $respuesta = $request['idEtnia'];
        } catch (Exception $e) {
            // Manejo del error
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }
    public static function GuardarEtnias($request)
    {
        try {

            if ($request['accEtnias'] == 'guardar') {
                $respuesta = DB::connection('mysql')->table('departamento_etnografia_list')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'nombre' => $request['nombreEtnia'],
                    'nombre_alterno' => $request['nombreEtniaAlterno'],
                    'lengua' => $request['etniaLengua'],
                    'contenido' => $request['contenidoEtnoHistoriaEtnia']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_etnografia_list')
                    ->where('id', $request['idEtnia'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                    ->update([
                        'nombre' => $request['nombreEtnia'],
                        'nombre_alterno' => $request['nombreEtniaAlterno'],
                        'lengua' => $request['etniaLengua'],
                        'contenido' => $request['contenidoEtnoHistoriaEtnia']
                    ]);

                $respuesta = $request['idEtnia'];
            }
        } catch (Exception $e) {
            // Manejo del error
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }
    public static function GuardarPregunta($request)
    {
        try {

            if ($request['accPregunta'] == 'guardar') {
                if ($request['tipoPreg'] == 'multiple') {
                    $pregunta = DB::connection('mysql')->table('preguntas')->insertGetId([
                        'departamento' => $request['idDepartamento'],
                        'tipo_pregunta' => $request['tipoPreg'],
                        'pregunta' => $request['contPregunta']
                    ]);

                    $correcta = $request['checkOpcionesPreg'][0];

                    foreach ($request["textOpcionesPreg"] as $key => $val) {
                        $respuesta = DB::connection('mysql')->table('opciones_multiple')->insert([
                            'pregunta' => $pregunta,
                            'opcion' => $val,
                            'correcta' => ($key  == $correcta) ? 1 : 0
                        ]);
                    }
                } else {
                    $pregunta = DB::connection('mysql')->table('preguntas')->insertGetId([
                        'departamento' => $request['idDepartamento'],
                        'tipo_pregunta' => $request['tipoPreg'],
                        'pregunta' => $request['preguntaVerfal']
                    ]);

                    $verfal = $request['checkVerFal'][0];
                    $respuesta = DB::connection('mysql')->table('opciones_verfal')->insert([
                        'pregunta' => $pregunta,
                        'respuesta' => $verfal
                    ]);
                }
            } else {
                if ($request['tipoPreg'] == 'multiple') {
                    $respuesta = DB::connection('mysql')->table('preguntas')
                        ->where('id', $request['idPregunta'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                        ->update([
                            'pregunta' => $request['contPregunta']
                        ]);

                    $opciones = DB::connection('mysql')->table('opciones_multiple')
                        ->where('pregunta', $request['idPregunta'])
                        ->delete();

                    $correcta = $request['checkOpcionesPreg'][0];
                    foreach ($request["textOpcionesPreg"] as $key => $val) {
                        $respuesta = DB::connection('mysql')->table('opciones_multiple')->insert([
                            'pregunta' => $request['idPregunta'],
                            'opcion' => $val,
                            'correcta' => ($key  == $correcta) ? 1 : 0
                        ]);
                    }

                    $respuesta = $request['idPregunta'];
                } else {
                    $respuesta = DB::connection('mysql')->table('preguntas')
                    ->where('id', $request['idPregunta'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                    ->update([
                        'pregunta' => $request['preguntaVerfal']
                    ]);

                    $verfal = $request['checkVerFal'][0];
                    $respuesta = DB::connection('mysql')->table('opciones_verfal')
                    ->where('pregunta', $request['idPregunta'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                    ->update([
                        'respuesta' => $verfal
                    ]);
                }
            }
        } catch (Exception $e) {
            // Manejo del error
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarFestividad($request)
    {
        try {

            if ($request['accFestividad'] == 'guardar') {
                $respuesta = DB::connection('mysql')->table('departamento_festividad_list')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'nombre' => $request['nombreFestividad'],
                    'contenido' => $request['contenidoFestividad'],
                    'destacada' => $request['destacada']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_festividad_list')
                    ->where('id', $request['idFestividad'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                    ->update([
                        'nombre' => $request['nombreFestividad'],
                        'contenido' => $request['contenidoFestividad'],
                        'destacada' => $request['destacada']
                    ]);

                $respuesta = $request['idFestividad'];
            }
        } catch (Exception $e) {
            // Manejo del error
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function GuardarSitio($request)
    {
        try {

            if ($request['accSitios'] == 'guardar') {
                $respuesta = DB::connection('mysql')->table('departamento_sitios_list')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'nombre' => $request['nombreSitioInteres'],
                    'contenido' => $request['contenidoSitiosInteres'],
                    'destacada' => $request['destacada']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_sitios_list')
                    ->where('id', $request['idSitios'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                    ->update([
                        'nombre' => $request['nombreSitioInteres'],
                        'contenido' => $request['contenidoSitiosInteres'],
                        'destacada' => $request['destacada']
                    ]);

                $respuesta = $request['idSitios'];
            }
        } catch (Exception $e) {
            // Manejo del error
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }
    public static function GuardarFauna($request)
    {
        try {

            if ($request['accFauna'] == 'guardar') {
                $respuesta = DB::connection('mysql')->table('departamento_fauna_list')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'nombre' => $request['nombreFauna'],
                    'contenido' => $request['contenidoFaunaList'],
                    'destacada' => $request['destacada']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_fauna_list')
                    ->where('id', $request['idFauna'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                    ->update([
                        'nombre' => $request['nombreFauna'],
                        'contenido' => $request['contenidoFaunaList'],
                        'destacada' => $request['destacada']
                    ]);

                $respuesta = $request['idFauna'];
            }
        } catch (Exception $e) {
            // Manejo del error
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }
    public static function GuardarFlora($request)
    {
        try {
            if ($request['accFlora'] == 'guardar') {
                $respuesta = DB::connection('mysql')->table('departamento_flora_list')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'nombre' => $request['nombreFlora'],
                    'contenido' => $request['contenidoFloraList'],
                    'destacada' => $request['destacada']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_flora_list')
                    ->where('id', $request['idFlora'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                    ->update([
                        'nombre' => $request['nombreFlora'],
                        'contenido' => $request['contenidoFloraList'],
                        'destacada' => $request['destacada']
                    ]);

                $respuesta = $request['idFlora'];
            }
        } catch (Exception $e) {
            // Manejo del error
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }
    public static function GuardarPersonaje($request)
    {
        try {

            if ($request['accPersonajes'] == 'guardar') {
                $respuesta = DB::connection('mysql')->table('departamento_personaje_list')->insertGetId([
                    'departamento' => $request['idDepartamento'],
                    'nombre' => $request['nombrePersonaje'],
                    'contenido' => $request['contenidoPersonajeDestacado'],
                    'destacada' => $request['destacada']
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('departamento_personaje_list')
                    ->where('id', $request['idPersonajes'])  // Asegúrate de tener una condición adecuada para identificar el registro a actualizar
                    ->update([
                        'nombre' => $request['nombrePersonaje'],
                        'contenido' => $request['contenidoPersonajeDestacado'],
                        'destacada' => $request['destacada']
                    ]);

                $respuesta = $request['idPersonajes'];
            }
        } catch (Exception $e) {
            // Manejo del error
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error al procesar el formulario: ' . $e->getMessage(),
            ], 500);
        }
        return  $respuesta;
    }

    public static function eliminarEtnias($id)
    {
        return DB::connection('mysql')->table('departamento_etnografia_list')
            ->where('id', $id)
            ->delete();
    }

    public static function eliminarFestividad($id)
    {
        return DB::connection('mysql')->table('departamento_festividad_list')
            ->where('id', $id)
            ->delete();
    }

    public static function eliminarSitio($id)
    {
        return DB::connection('mysql')->table('departamento_sitios_list')
            ->where('id', $id)
            ->delete();
    }
    public static function eliminarFauna($id)
    {
        return DB::connection('mysql')->table('departamento_fauna_list')
            ->where('id', $id)
            ->delete();
    }
    public static function eliminarFlora($id)
    {
        return DB::connection('mysql')->table('departamento_flora_list')
            ->where('id', $id)
            ->delete();
    }

    public static function eliminarPersonaje($id)
    {
        return DB::connection('mysql')->table('departamento_personaje_list')
            ->where('id', $id)
            ->delete();
    }
}
