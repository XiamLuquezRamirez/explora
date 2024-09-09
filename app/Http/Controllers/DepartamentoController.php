<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Departamento;
use PhpParser\Node\Stmt\Else_;

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

    public function listaDepartamento(Request $request)
    {

        if (Auth::check()) {
            $perPage = 10; // Número de posts por página
            $page = request()->get('page', 1);
            $search = request()->get('search');
            if (!is_numeric($page)) {
                $page = 1; // Establecer un valor predeterminado si no es numérico
            }

            $departamento = DB::connection('mysql')
                ->table('departamento_descripcion')
                ->leftJoin("list_departamentos", "list_departamentos.id", "departamento_descripcion.departamento")
                ->where('departamento_descripcion.estado', 'ACTIVO')
                ->select("list_departamentos.nombre", "list_departamentos.capital", "departamento_descripcion.estado_registro", "departamento_descripcion.id");

            if ($search) {
                $departamento->where(function ($query) use ($search) {
                    $query->where('nombre', 'LIKE', '%' . $search . '%')
                        ->orWhere('capital', 'LIKE', '%' . $search . '%');
                });
            }

            $ListDepartamento = $departamento->paginate($perPage, ['*'], 'page', $page);

            $tdTable = '';
            $x = ($page - 1) * $perPage + 1;

            foreach ($ListDepartamento as $i => $item) {
                if (!is_null($item)) {
                    $estado = '<span class="badge badge-sm badge-success-light">COMPLETO</span>';
                    if ($item->estado_registro == "INCOMPLETO") {
                        $estado = '<span class="badge badge-sm badge-danger-light">INCOMPLETO</span>';
                    }

                    $tdTable .= '<tr>
                                    <td>' . $item->nombre . '</td>
                                    <td>' . $item->capital . '</td>
                                    <td>' . $estado . '</td>
                                    <td class="table-action min-w-100">
                                        <a onclick="pregDepartamento(' . $item->id . ');" style="cursor: pointer;" title="Preguntas" class="text-fade hover-primary"><i class="align-middle"
                                                data-feather="check-circle"></i></a>
                                        <a onclick="editarDepartamento(' . $item->id . ');" style="cursor: pointer;" title="Editar" class="text-fade hover-primary"><i class="align-middle"
                                                data-feather="edit-2"></i></a>
                                        <a onclick="eliminarDepartamento(' . $item->id . ');" style="cursor: pointer;" title="Eliminar" class="text-fade hover-primary"><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>';
                    $x++;
                }
            }

            $pagination = $ListDepartamento->links('Departamentos.PaginacionDepartamento')->render();

            return response()->json([
                'departamentos' => $tdTable,
                'links' => $pagination,
            ]);
        } else {
            return redirect("/")->with("error", "Su Sesión ha Terminado");
        }
    }
    public function visualizacionDepartamento(Request $request)
    {
        if (Auth::check()) {
            $perPage = 10; // Número de posts por página
            $page = request()->get('page', 1);
            $search = request()->get('search');
            if (!is_numeric($page)) {
                $page = 1; // Establecer un valor predeterminado si no es numérico
            }
    
            $departamento = DB::connection('mysql')
                ->table('departamento_descripcion')
                ->leftJoin("list_departamentos", "list_departamentos.id", "departamento_descripcion.departamento")
                ->where('departamento_descripcion.estado', 'ACTIVO')
                ->select("list_departamentos.nombre", "list_departamentos.capital", "departamento_descripcion.contenido", "departamento_descripcion.id", "departamento_descripcion.bandera");
    
            if ($search) {
                $departamento->where(function ($query) use ($search) {
                    $query->where('nombre', 'LIKE', '%' . $search . '%')
                        ->orWhere('capital', 'LIKE', '%' . $search . '%');
                });
            }
    
            $ListDepartamento = $departamento->paginate($perPage, ['*'], 'page', $page);
    
            $tdTable = '';
            $x = ($page - 1) * $perPage + 1;
    
            foreach ($ListDepartamento as $i => $item) {
                if (!is_null($item)) {
                    $regexImg = '/<img.*?src=["\'](.*?)["\'].*?>/i';
                    preg_match($regexImg, $item->contenido, $coincidencias);
    
                    if (!isset($coincidencias[0])) {
                        preg_match($regexImg, $item->bandera, $coincidencias);
                    }
    
                    $urlPrimeraImagen = $coincidencias[1] ?? null;
    
                    // Eliminar la primera etiqueta <img> solo si existe en el contenido
                    if (isset($coincidencias[0])) {
                        $contenido = str_replace($coincidencias[0], '', $item->contenido);
                    } else {
                        $contenido = $item->contenido;
                    }
    
                    // Extraer todos los párrafos
                    $regexP = '/<p\b[^>]*>(.*?)<\/p>/i';
                    preg_match_all($regexP, $contenido, $parrafos);
    
                    $primerParrafo = '';
                    if (isset($parrafos[1])) {
                        foreach ($parrafos[1] as $p) {
                            // Eliminar etiquetas HTML internas y verificar si el párrafo no está vacío o solo tiene espacios
                            $textoSinEtiquetas = strip_tags($p);
                            if (trim($textoSinEtiquetas) !== '') {
                                $primerParrafo = $p;
                                break;
                            }
                        }
                    }
    
                    $tdTable .= '<div class="col-lg-6" onclick="mostrarInformacionDepartamento(' . $item->id . ')" style="cursor: pointer;">
                        <div class="card animated bounce">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4">
                                    <img src="' . $urlPrimeraImagen . '" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fw-600">' . $item->nombre . ' - ' . $item->capital . '</h5>
                                        <div style="text-align: justify;">' . $primerParrafo . '</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    $x++;
                }
            }
    
            $pagination = $ListDepartamento->links('Departamentos.PaginacionDepartamento')->render();
    
            return response()->json([
                'departamentos' => $tdTable,
                'links' => $pagination,
            ]);
        } else {
            return redirect("/")->with("error", "Su Sesión ha Terminado");
        }
    }
    
    

    public function VisualizacionPreguntas(Request $request)
    {

        if (Auth::check()) {
            $perPage = 4; // Número de posts por página
            $page = request()->get('page', 1);
            if (!is_numeric($page)) {
                $page = 1; // Establecer un valor predeterminado si no es numérico
            }

            $departamento = DB::connection('mysql')
                ->table('preguntas');

            $ListDepartamento = $departamento->paginate($perPage, ['*'], 'page', $page);

            $tdTable = '';
            $x = ($page - 1) * $perPage + 1;

            foreach ($ListDepartamento as $i => $item) {
                if (!is_null($item)) {
                    if ($item->tipo_pregunta == "multiple") {
                        $tdTable .= ' <div id="preg'.$item->id.'" class="col-xl-6 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <h5 class="box-title  mt-20 d-block mb-10">Pregunta.</h5>
                                    <p class="text-gray-600">' . $item->pregunta . '</p>
                                </div>
                                <div id="opcionesResp">';
                                $opciones = DB::connection('mysql')
                                ->table('opciones_multiple')
                                ->where('pregunta', $item->id)
                                ->get();
                       
                        foreach ($opciones as $opcion) {
                            $checcked = $opcion->correcta == 1 ? 'checked' : '';
                            $tdTable .= '<div class="input-group mb-1">
                                <span class="input-group-addon">
                                    <input type="checkbox" ' . $checcked . ' disabled id="addon_CheckboxOpcionesVis_' . ($x - 1) . '" >
                                    <label for="addon_CheckboxVerFal_' . ($x - 1) . '">' . $opcion->opcion . '</label>
                                </span>
                            </div>';
                        }
                        $tdTable .= '</div>
                                <div class="box-footer flexbox">
                                    <div class="text-end flex-grow">
                                        <button onclick="deletePreg(' . $item->id . ')" class="btn btn-sm btn-warning"><i class="fa fa-trash-o"></i> Eliminar</button>
                                        <button onclick="editPreg(' . $item->id . ')" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    } else {
                        $opciones = DB::connection('mysql')
                                ->table('opciones_verfal')
                                ->where('pregunta', $item->id)
                                ->first();

                        $checkVed="";
                        $checkFal="";

                        if($opciones->respuesta == 1){
                            $checkVed="checked";
                            $checkFal="";
                        }else{
                            $checkVed="";
                            $checkFal="checked";
                        }

                        $tdTable .= ' <div id="preg'.$item->id.'" class="col-xl-6 col-12">
                            <div class="box">
                                
                                <div class="box-body">
                                    <h5 class="box-title  mt-20 d-block mb-10">Pregunta</h5>
                                    <p class="text-gray-600">' . $item->pregunta . '</p>
                                </div>
                                <div id="opcionesRespVerFal">
                                <div class="input-group mb-1">
                                    <span class="input-group-addon">
                                        <input type="checkbox" '.$checkVed.' disabled id="addon_CheckboxOpcionesVis_0" >
                                        <label for="addon_CheckboxVerFal_0">Verdadero</label>
                                    </span>
                                </div>

                                <div class="input-group mb-1">
                                    <span class="input-group-addon">
                                        <input type="checkbox" '.$checkFal.' disabled
                                            id="addon_CheckboxOpcionesVis_1" >
                                        <label for="addon_CheckboxOpcionesVis_1">Falso</label>
                                    </span>
                                </div>
                                </div>
                               
                                <div class="box-footer flexbox">
                                     <div class="text-end flex-grow">
                                        <button onclick="deletePreg(' . $item->id . ')" class="btn btn-sm btn-warning"><i class="fa fa-trash-o"></i> Eliminar</button>
                                        <button onclick="editPreg(' . $item->id . ')" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }

                    $x++;
                }
            }

            $pagination = $ListDepartamento->links('Departamentos.PaginacionPreguntas')->render();

            return response()->json([
                'preguntas' => $tdTable,
                'links' => $pagination,
            ]);
        } else {
            return redirect("/")->with("error", "Su Sesión ha Terminado");
        }
    }

    public function listadoRegistros(Request $request)
    {
        $data = $request->all();
        $lista = Departamento::listDepartamentosRegistros($data);

        return response()->json($lista);
    }

    public function busquedaEtnias(Request $request)
    {
        $idEtnia = $request->input('idEtnia');
        $etnias = Departamento::busquedaEtnias($idEtnia);
        return response()->json($etnias);
    }
    public function busquedaPregunta(Request $request)
    {
        $idPreg = $request->input('idPreg');
        $pregunta = Departamento::busquedaPreguntas($idPreg);
        
        if($pregunta->tipo_pregunta == 'multiple'){
            $opciones = Departamento::busquedaOpcionesPregunta($idPreg);
            $pregunta->opciones = $opciones;
        }else{
            $verlFal = Departamento::busquedaOpcionVerFal($idPreg);
            $pregunta->verFal = $verlFal->respuesta;
        }
        return response()->json($pregunta);
    }

    public function busquedaFestividad(Request $request)
    {
        $idFesti = $request->input('idFesti');
        $Festi = Departamento::busquedaFestividad($idFesti);
        return response()->json($Festi);
    }

    public function busquedaSitio(Request $request)
    {
        $idSitio = $request->input('idSitio');
        $sitio = Departamento::busquedaSitio($idSitio);
        return response()->json($sitio);
    }

    public function busquedaPersonaje(Request $request)
    {
        $idPersonaje = $request->input('idPersonaje');
        $personaje = Departamento::busquedaPersonaje($idPersonaje);
        return response()->json($personaje);
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
            case 'faunaflora':
                $departamento = Departamento::GuardarFaunafloraDepart($data);

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
            case 'capital':
                $departamento = Departamento::GuardarCapitalDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );
            case 'referencia':
                $departamento = Departamento::GuardarReferenciaDepart($data);
                $departamento = Departamento::UpdateEstadoDepart($data);

                return response()->json(
                    [
                        'success' => true
                    ]
                );

            default:
                return response()->json(['error' => 'Formulario no reconocido'], 400);
        }
    }

    public function guardarPreguntas(Request $request)
    {
        $data = $request->all();
        $pregunta = Departamento::GuardarPregunta($data);

        if ($pregunta) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }
    public function guardarEtnias(Request $request)
    {
        $data = $request->all();
        $etnia = Departamento::GuardarEtnias($data);
        if ($etnia) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }
    public function guardarFestividad(Request $request)
    {
        $data = $request->all();
        $festividad = Departamento::GuardarFestividad($data);
        if ($festividad) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }
    public function guardarSitios(Request $request)
    {
        $data = $request->all();
        $sitio = Departamento::GuardarSitio($data);
        if ($sitio) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }
    public function guardarPersonaje(Request $request)
    {
        $data = $request->all();
        $personaje = Departamento::GuardarPersonaje($data);
        if ($personaje) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }

    public function eliminarEtnias()
    {
        $idEtnia = request()->input('idEtnia');
        $festividad = Departamento::eliminarEtnias($idEtnia);
        if ($festividad) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }
    public function eliminarPreguntas()
    {
        try {
            $idPreg = request()->input('idPreg');
            
            // Verificar que $idPreg no sea nulo o vacío
            if (!$idPreg) {
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'ID de pregunta no proporcionado'
                    ], 400
                );
            }
            
            // Intentar eliminar la pregunta
            $pregunta = DB::connection('mysql')
                ->table('preguntas')
                ->where('id', $idPreg)
                ->delete();
            
            if ($pregunta) {
                return response()->json(
                    [
                        'success' => true,
                        'message' => 'Pregunta eliminada correctamente'
                    ]
                );
            } else {
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'No se encontró la pregunta o no se pudo eliminar'
                    ], 404
                );
            }
        } catch (\Exception $e) {
            // Manejar cualquier error o excepción
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Ocurrió un error al intentar eliminar la pregunta',
                    'error' => $e->getMessage()
                ], 500
            );
        }
    }
    public function eliminarDepartamento()
    {
        try {
            $idDepar = request()->input('idDepar');
            
           
            if (!$idDepar) {
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'ID de departamento no proporcionado'
                    ], 400
                );
            }
            
            $pregunta = DB::connection('mysql')
                ->table('departamento_descripcion')
                ->where('id', $idDepar)
                ->delete();
            
            if ($pregunta) {
                return response()->json(
                    [
                        'success' => true,
                        'message' => 'Departamento eliminado correctamente'
                    ]
                );
            } else {
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'No se encontró el departamento o no se pudo eliminar'
                    ], 404
                );
            }
        } catch (\Exception $e) {
            // Manejar cualquier error o excepción
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Ocurrió un error al intentar eliminar el departamento',
                    'error' => $e->getMessage()
                ], 500
            );
        }
    }
    

    public function eliminarFestividad()
    {
        $idFesti = request()->input('idFesti');
        $festividad = Departamento::eliminarFestividad($idFesti);
        if ($festividad) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }

    public function eliminarSitio()
    {
        $idSitio = request()->input('idSitio');
        $festividad = Departamento::eliminarSitio($idSitio);
        if ($festividad) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }

    public function eliminarPersonaje()
    {
        $idPersonaje = request()->input('idPersonaje');
        $personaje = Departamento::eliminarPersonaje($idPersonaje);
        if ($personaje) {
            return response()->json(
                [
                    'success' => true
                ]
            );
        }
    }

    public function busquedaDepartamento()
    {

        $idDepartamento = request()->input('idDepartamento');

        $descripcion = Departamento::busquedaDescripcion($idDepartamento);

        $nombreDepartamento = Departamento::busDetDescripcion($descripcion->departamento);

        $historia = Departamento::busquedaHistoria($idDepartamento);
        $geografia = Departamento::busquedaGeografia($idDepartamento);
        $hidrografia = Departamento::busquedaHidrografia($idDepartamento);
        $clima = Departamento::busquedaClima($idDepartamento);
        $demografia = Departamento::busquedaDemografia($idDepartamento);
        $etnografia = Departamento::busquedaEtnografia($idDepartamento);
        $faunaFlora = Departamento::busquedaFaunaFlora($idDepartamento);
        $economia = Departamento::busquedaEconomia($idDepartamento);
        $cultura = Departamento::busquedaCultura($idDepartamento);
        $gastronomia = Departamento::busquedaGastronomia($idDepartamento);
        $capital = Departamento::busquedaCapital($idDepartamento);
        $referencia = Departamento::busquedaReferencia($idDepartamento);


        return response()->json(
            [
                'descripcion' => $descripcion,
                'nombreDepartamento' => $nombreDepartamento,
                'historia' => $historia,
                'geografia' => $geografia,
                'hidrografia' => $hidrografia,
                'clima' => $clima,
                'demografia' => $demografia,
                'etnografia' => $etnografia,
                'faunaFlora' => $faunaFlora,
                'economia' => $economia,
                'cultura' => $cultura,
                'gastronomia' => $gastronomia,
                'capital' => $capital,
                'referencia' => $referencia
            ]
        );
    }
}
