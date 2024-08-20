<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Departamento;


class DepartamentoController extends Controller
{
    public function Departamentos()
    {
        if (Auth::check()) {
            $bandera = "";
            return view('Departamentos.GestionarDepartamentos', compact('bandera'));
        } else {
            return redirect("/")->with("error", "Su Sesión ha Terminado");
        }
    }

    public function list()
    {
        $departamentos = Departamento::listDepartamentos(); 
        return response()->json($departamentos);
    }
    public function listadoRegistros(Request $request)
    {
        $data = $request->all();       
        $lista = Departamento::listDepartamentosRegistros($data); 
        return response()->json($lista);
    }

    public function busquedaEtnias(Request $request){
        $idEtnia = $request->input('idEtnia');
        $etnias = Departamento::busquedaEtnias($idEtnia); 
        return response()->json($etnias);
    }

    public function busquedaFestividad(Request $request){
        $idFesti = $request->input('idFesti');
        $Festi = Departamento::busquedaFestividad($idFesti); 
        return response()->json($Festi);
    }

    public function guardarDepartamento(Request $request)
    {
        $data = $request->all();
        $idFomulario = $data['form_id'];

        switch ($idFomulario) {
            case 'descripcion':
                $departamento = Departamento::GuardaeDescripcionDepart($data);

                return response()->json(
                    [
                        'success' => true,
                        'idDepartamento' => $departamento
                    ]
                );
            case 'historia':
                $departamento = Departamento::GuardarHistoriaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'geografia':
                $departamento = Departamento::GuardarGeografiaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'hidrografia':
                $departamento = Departamento::GuardarHidrografiaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'clima':
                $departamento = Departamento::GuardarClimaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'demografia':
                $departamento = Departamento::GuardarDemografiaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'etnografia':
                $departamento = Departamento::GuardarEtnografiaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'economia':
                $departamento = Departamento::GuardarEconomiaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'cultura':
                $departamento = Departamento::GuardarCulturaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'gastronomia':
                $departamento = Departamento::GuardarGastronomiaDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );

            default:
                return response()->json(['error' => 'Formulario no reconocido'], 400);
        }
    }

    public function guardarEtnias(Request $request){
        $data = $request->all();
        $etnia = Departamento::GuardarEtnias($data);
        if($etnia){
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
        
    }
    public function guardarFestividad(Request $request){
        $data = $request->all();
        $etnia = Departamento::GuardarFestividad($data);
        if($etnia){
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
        
    }

    public function eliminarEtnias(){
        $idEtnia = request()->input('idEtnia');
        $etnias = Departamento::eliminarEtnias($idEtnia);
        if($etnias){
            return response()->json(
                [
                   'success' => true
                ]
            );
        }
    }

    public function eliminarFestividad(){
        $idFesti = request()->input('idFesti');
        $festividad = Departamento::eliminarFestividad($idFesti);
        if($festividad){
            return response()->json(
                [
                   'success' => true
                ]
            );
        }
    }
}
