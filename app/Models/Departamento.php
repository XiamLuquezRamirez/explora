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
    public static function busquedaFestividad($idFesti)
    {
        return DB::connection('mysql')->table('departamento_festividad_list')
            ->where("id", $idFesti)
            ->first();
    }
    public static function listDepartamentosRegistros($request)
    {
        if ($request['idform'] == 'etnografia') {
            return DB::connection('mysql')->table('departamento_etnografia_list')
                ->where("departamento", $request['idDepartamento'])
                ->get();
        }else if($request['idform'] == 'festividad'){
            return DB::connection('mysql')->table('departamento_festividad_list')
                ->where("departamento", $request['idDepartamento'])
                ->get();
        }
    }

    public static function GuardaeDescripcionDepart($request)
    {
        try {
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
                'estado' => 'ACTIVO'
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_historia')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'historia' => $request['contenidoHistoria']
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_geografia')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'ubicacion' => $request['contenidoUbicacion'],
                'coordenadas' => $request['contenidoCoordenadas'],
                'limites' => $request['contenidoLimites'],
                'relieve' => $request['contenidoRelieve'],
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_hidrografia')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'hidrografia' => $request['contenidoHidrografia']
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_clima')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'clima' => $request['contenidoClima']
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_demografia')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'poblacion' => $request['contenidoPoblacion'],
                'densidad' => $request['contenidoDensidad'],
                'subregiones' => $request['contenidoSubregiones']
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_etnografia')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'contenido' => $request['contenidoEtnoHistoria']
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_economia')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'economia' => $request['contenidoEconomia']
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_cultura')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'arte' => $request['contenidoArte'],
                'danza' => $request['contenidoDanza'],
                'musica' => $request['contenidoMusica']
            ]);
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
            $respuesta = DB::connection('mysql')->table('departamento_gastronomia')->insertGetId([
                'departamento' => $request['idDepartamento'],
                'gastronomia' => $request['contenidoGastronomia']
            ]);
        } catch (Exception $e) {
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

    public static function eliminarEtnias($id){
        return DB::connection('mysql')->table('departamento_etnografia_list')
            ->where('id', $id)
            ->delete();
    }

    public static function eliminarFestividad($id){
        return DB::connection('mysql')->table('departamento_festividad_list')
            ->where('id', $id)
            ->delete();
    }
}
