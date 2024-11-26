<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;

class Usuario extends Model
{
    public static function login($request)
    {
        $usuario = DB::connection("mysql")->select("select * from users where login_usuario ='" . $request['usuario'] . "' AND estado_usuario='ACTIVO'");

        if (!empty($usuario)) {
            $usuario = $usuario[0];

            if (\Hash::check($request['pasword'], $usuario->pasword_usuario)) {
                auth()->loginUsingId($usuario->id);
                return $usuario;
            }
        }
        return false;
    }

    public static function busquedaUsuario($idUsu){
        return DB::connection('mysql')->table('users')
        ->where("id", $idUsu)
        ->first();
    }


    public static function Guardar($request)
    {
        try {

            if ($request['accUsuario'] == 'guardar') {
                $respuesta = DB::connection('mysql')->table('users')->insertGetId([
                    'nombre_usuario' => $request['nombre'],
                    'login_usuario' => $request['usuario'],
                    'pasword_usuario' => bcrypt($request['pasw']),
                    'tipo_usuario' => $request['tipo'],
                    'email_usuario' => $request['email'],
                    'foto_usuario' => 'avatar-13.png',
                    'estado_usuario' => 'ACTIVO'
                ]);
            } else {
                $respuesta = DB::connection('mysql')->table('users')
                ->where('id', $request['idUsuario'])  // Identificar el registro a actualizar
                ->update([
                    'nombre_usuario' => $request['nombre'],
                    'login_usuario' => $request['usuario'],
                    'tipo_usuario' => $request['tipo'],
                    'email_usuario' => $request['email'],
                    'pasword_usuario' => $request['pasw'] ? bcrypt($request['pasw']) : DB::raw('usuarioOriginal')
                ]);
            

                $respuesta = $request['idUsuario'];
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
}
