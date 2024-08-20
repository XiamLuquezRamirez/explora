@extends('Plantilla.Principal')
@section('title', 'Gestionar departamentos')
@section('Contenido')

    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Gestionar departamentos</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Inicio</li>
                            <li class="breadcrumb-item active" aria-current="page">Gestionar departamentos</li>
                        </ol>
                    </nav>
                </div>

            </div>

        </div>
    </div>
    <section class="content">
        <div class="row">

            <div id="listado" class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Listado de departamentos</h5>
                    </div>
                    <div class="card-body">
                        <div class="box-controls pull-right">
                            <div class="box-header-actions">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="busqueda" class="form-control">
                                    <div class="input-group-text" data-password="false">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <button type="button" onclick="nuevoRegistro();" class="btn btn-xs btn-primary"><i
                                            class="fa fa-plus"></i> Nuevo
                                        registro</button>
                                </div>

                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Departamento</th>
                                    <th style="width:15%;">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Antioquia</td>
                                    <td class="table-action min-w-100">
                                        <a href="#" class="text-fade hover-primary"><i class="align-middle"
                                                data-feather="edit-2"></i></a>
                                        <a href="#" class="text-fade hover-primary"><i class="align-middle"
                                                data-feather="trash"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="formulario" style="display: none;" class="col-12 col-xl-12">
                <input type="hidden" value="" name="idDepartamento" id="idDepartamento">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Registro de departmanto </h4>
                        <h6 class="box-subtitle">Registre toda la información del departamento</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body wizard-content">
                        <div class="tab-wizard vertical wizard-circle">
                            <!-- Step 1 -->
                            <h6>Descripción</h6>
                            <section>
                                <form id="descripcion">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="departamento" class="form-label">Departamento :</label>
                                                <select id="departamento" onchange="mostrarCapital(this)"
                                                    name="departamento" class="form-control select2" style="width: 100%;">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="capital" class="form-label">Capital :</label>
                                                <input type="text" class="form-control" readonly id="capital"
                                                    name="capital">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="poblacion" class="form-label">Población :</label>
                                                <input type="text" class="form-control" id="poblacion" name="poblacion">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="clima" class="form-label">Clima :</label>
                                                <select class="form-select" id="clima" name="clima">
                                                    <option value="">Seleccione...</option>
                                                    <option value="húmedo">Clima tropical húmedo</option>
                                                    <option value="seco">Clima seco</option>
                                                    <option value="templado">Clima templado</option>
                                                    <option value="montaña">Clima de montaña</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="temperatura" class="form-label">Temperatura :</label>
                                                <input type="text" class="form-control" id="temperatura"
                                                    name="temperatura">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="extension" class="form-label">Extensión :</label>
                                                <input type="text" class="form-control" name="extension"
                                                    id="extension">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenido" class="form-label">Contenido :</label>
                                                <textarea id="contenido" name="contenido" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="header-title">Otra información</h4>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                                    <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                                        <li class="nav-item">
                                                            <a href="#Geografia-b2" data-bs-toggle="tab"
                                                                aria-expanded="false" class="nav-link active">
                                                                <span class="d-none d-md-block">Geografia</span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a href="#ActividadEconomica-b2" data-bs-toggle="tab"
                                                                aria-expanded="false" class="nav-link">
                                                                <span class="d-none d-md-block">Actividad Economica</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#Bandera-b2" data-bs-toggle="tab"
                                                                aria-expanded="false" class="nav-link">
                                                                <span class="d-none d-md-block">Bandera</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#Escudo-b2" data-bs-toggle="tab"
                                                                aria-expanded="false" class="nav-link">
                                                                <span class="d-none d-md-block">Escudo</span>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content px-20">
                                                        <div class="tab-pane show active" id="Geografia-b2">
                                                            <textarea id="contenidoGeografia" name="contenidoGeografia" rows="10" cols="80">
                                                
                                                        </textarea>
                                                        </div>

                                                        <div class="tab-pane" id="ActividadEconomica-b2">
                                                            <textarea id="contenidoActividadEconomica" name="contenidoActividadEconomica" rows="10" cols="80">
                                                
                                                        </textarea>
                                                        </div>
                                                        <div class="tab-pane" id="Bandera-b2">
                                                            <textarea id="contenidoBandera" name="contenidoBandera" rows="10" cols="80">
                                                
                                                        </textarea>
                                                        </div>
                                                        <div class="tab-pane" id="Escudo-b2">
                                                            <textarea id="contenidoEscudo" name="contenidoEscudo" rows="10" cols="80">
                                                
                                                        </textarea>
                                                        </div>
                                                    </div>
                                                </div> <!-- end preview-->

                                                <div class="tab-pane" id="bordered-justified-tabs-code">
                                                    <pre class="mb-0">
                                                  
                                                </pre> <!-- end highlight-->
                                                </div> <!-- end preview code-->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <!-- Step 2 -->
                            <h6>Historia</h6>
                            <section>
                                <form id="historia">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoHistoria" class="form-label">Historia del
                                                    departamento
                                                    :</label>
                                                <textarea id="contenidoHistoria" name="contenidoHistoria" rows="10" cols="80">
                                                
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <!-- Step 3 -->
                            <h6>Geografía</h6>
                            <section>
                                <form id="geografia">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoUbicacion" class="form-label">Ubicación:</label>
                                                <textarea id="contenidoUbicacion" name="contenidoUbicacion" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoCoordenadas" class="form-label">Coordenadas :</label>
                                                <textarea id="contenidoCoordenadas" name="contenidoCoordenadas" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoLimites" class="form-label">Límites :</label>
                                                <textarea id="contenidoLimites" name="contenidoLimites" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoRelieve" class="form-label">Relieve :</label>
                                                <textarea id="contenidoRelieve" name="contenidoRelieve" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </section>
                            <!-- Step 4 -->
                            <h6>Hidrografía</h6>
                            <section>
                                <form id="hidrografia">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="contenidoHidrografia" name="contenidoHidrografia" rows="10" cols="80">
                                                
                                        </textarea>

                                        </div>

                                    </div>
                                </form>
                            </section>
                            <!-- Step 5 -->
                            <h6>Clima</h6>
                            <section>
                                <form id="clima">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="contenidoClima" name="contenidoClima" rows="10" cols="80">
                                                
                                        </textarea>

                                        </div>

                                    </div>
                                </form>
                            </section>
                            <!-- Step 6 -->
                            <h6>Demografía</h6>
                            <section>
                                <form id="demografia">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoPoblacion" class="form-label">Población :</label>
                                                <textarea id="contenidoPoblacion" name="contenidoPoblacion" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoDensidad" class="form-label">Densidad :</label>
                                                <textarea id="contenidoDensidad" name="contenidoDensidad" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoSubregiones" class="form-label">Subregiones :</label>
                                                <textarea id="contenidoSubregiones" name="contenidoSubregiones" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </section>
                            <!-- Step 7 -->
                            <h6>Etnografía</h6>
                            <section>
                                <form id="etnografia">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoEtnoHistoria" class="form-label">Historia :</label>
                                                <textarea id="contenidoEtnoHistoria" name="contenidoEtnoHistoria" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4 class="header-title">Listado de etnias.</h4>
                                            <div class="col-md-2 offset-md-10" style="text-align: right;">
                                                <button type="button" id="openModalEtnias" onclick="openModalEtnia();"
                                                    class="waves-effect waves-light btn btn-primary mb-5"><i
                                                        class="fa fa-plus"></i>
                                                    Agregar</button>
                                            </div>
                                            <div class="col-md-12">
                                                <table id="tableEtnias" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:35%;">Nombre</th>
                                                            <th style="width:35%;">Nombre alterno</th>
                                                            <th style="width:20%;">Lengua</th>
                                                            <th style="width:10%;">Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <!-- Step 8 -->
                            <h6>Economía</h6>
                            <section>
                                <form id="economia">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="contenidoEconomia" name="contenidoEconomia" rows="10" cols="80">
                                                
                                        </textarea>

                                        </div>

                                    </div>
                                </form>
                            </section>
                            <!-- Step 9 -->
                            <h6>
                                Cultura
                            </h6>
                            <section>
                                <form id="cultura">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoArte" class="form-label">Arte :</label>
                                                <textarea id="contenidoArte" name="contenidoArte" rows="10" cols="80">
                                                  
                                              </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoDanza" class="form-label">Danza :</label>
                                                <textarea id="contenidoDanza" name="contenidoDanza" rows="10" cols="80">
                                                  
                                              </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoMusica" class="form-label">Música :</label>
                                                <textarea id="contenidoMusica" name="contenidoMusica" rows="10" cols="80">
                                                  
                                              </textarea>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </section>
                            <!-- Step 10 -->
                            <h6>Gastronomía</h6>
                            <section>
                                <form id="gastronomia">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="contenidoGastronomia" name="contenidoGastronomia" rows="10" cols="80">
                                                
                                        </textarea>

                                        </div>

                                    </div>
                                </form>
                            </section>

                            <!-- Step 11 -->
                            <h6>Festividades</h6>
                            <section>
                                <form id="festividades">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="header-title">Listado de festividades</h4>
                                            <div class="col-md-2 offset-md-10" style="text-align: right;">
                                                <button type="button" id="openModalFestividades"
                                                    onclick="openModalFestividad();"
                                                    class="waves-effect waves-light btn btn-primary mb-5"><i
                                                        class="fa fa-plus"></i>
                                                    Agregar</button>
                                            </div>

                                            <div class="col-md-12">
                                                <table id="tableFestividad" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:40%;">Nombre</th>
                                                            <th style="width:15%;">Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <!-- Step 12 -->
                            <h6>Sitios de interes</h6>
                            <section>
                                <form id="sitiosInteres">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="header-title">Listado de sitios de interes.</h4>
                                            <div class="col-md-2 offset-md-10" style="text-align: right;">
                                                <button type="button" id="openModalSitiosInteres" data-bs-toggle="modal"
                                                    data-bs-target="#modalSitiosInteres"
                                                    class="waves-effect waves-light btn btn-primary mb-5"><i
                                                        class="fa fa-plus"></i>
                                                    Agregar</button>
                                            </div>

                                            <div class="col-md-12">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:40%;">Nombre</th>
                                                            <th style="width:15%;">Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Ashley Briggs</td>
                                                            <td class="table-action min-w-100">
                                                                <a href="#" class="text-fade hover-primary"><i
                                                                        class="align-middle"
                                                                        data-feather="edit-2"></i></a>
                                                                <a href="#" class="text-fade hover-primary"><i
                                                                        class="align-middle" data-feather="trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Carl Jenkins</td>
                                                            <td class="table-action">
                                                                <a href="#" class="text-fade hover-primary"><i
                                                                        class="align-middle"
                                                                        data-feather="edit-2"></i></a>
                                                                <a href="#" class="text-fade hover-primary"><i
                                                                        class="align-middle" data-feather="trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <!-- Step 13 -->
                            <h6>Personajes destacados</h6>
                            <section>
                                <form id="personajesDestacados">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="header-title">Listado de personajes destacados.</h4>
                                            <div class="col-md-2 offset-md-10" style="text-align: right;">
                                                <button type="button" id="openModalPersonajesDestacados"
                                                    data-bs-toggle="modal" data-bs-target="#modalPersonajesDestacados"
                                                    class="waves-effect waves-light btn btn-primary mb-5"><i
                                                        class="fa fa-plus"></i>
                                                    Agregar</button>
                                            </div>

                                            <div class="col-md-12">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:40%;">Nombre</th>
                                                            <th style="width:15%;">Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Ashley Briggs</td>
                                                            <td class="table-action min-w-100">
                                                                <a href="#" class="text-fade hover-primary"><i
                                                                        class="align-middle"
                                                                        data-feather="edit-2"></i></a>
                                                                <a href="#" class="text-fade hover-primary"><i
                                                                        class="align-middle" data-feather="trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Carl Jenkins</td>
                                                            <td class="table-action">
                                                                <a href="#" class="text-fade hover-primary"><i
                                                                        class="align-middle"
                                                                        data-feather="edit-2"></i></a>
                                                                <a href="#" class="text-fade hover-primary"><i
                                                                        class="align-middle" data-feather="trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>

                            <!-- Step 14 -->
                            <h6>Capital</h6>

                            <section>
                                <form id="capital">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="contenidoCapital" name="contenidoGastronomia" rows="10" cols="80">
                                           </textarea>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <!-- Step 15 -->
                            <h6>Referencias</h6>
                            <section>
                                <form id="referencia">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="referencia" class="form-label">Referencia :</label>
                                                <textarea class="textarea" placeholder="Por favor ingresar las referencias"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="webgrafia" class="form-label">Webgrafia :</label>
                                                <textarea class="textarea" placeholder="Por favor ingresar las webgrafias"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- MODAL ETNOGRAFIA -->
    <div class="modal fade" id="modalEtnografia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Agregar etnia</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="formEtnias">
                        <input type="hidden" name="accEtnias" id="accEtnias" value="guardar" />
                        <input type="hidden" name="idEtnia" id="idEtnia" value="" />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombreEtnia" class="form-label">Nombre :</label>
                                    <input type="text" class="form-control" id="nombreEtnia" name="nombreEtnia">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombreEtniaAlterno" class="form-label">Nombre alterno :</label>
                                    <input type="text" class="form-control" id="nombreEtniaAlterno"
                                        name="nombreEtniaAlterno">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="etniaLengua" class="form-label">Lengua :</label>
                                    <input type="text" class="form-control" id="etniaLengua" name="etniaLengua">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contenidoEtnoHistoriaEtnia" class="form-label">Historia :</label>
                                    <textarea id="contenidoEtnoHistoriaEtnia" name="contenidoEtnoHistoriaEtnia" rows="10" cols="80">

                            </textarea>
                                </div>
                            </div>
                            <div class="box-footer text-end">
                                <button type="button" onclick="newEtnias();" style="display: none;" id="newEtnia"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-plus "></i> Nuevo
                                </button>
                                <button type="button" id="cancelEtnias" onclick="cancelarEtnias();"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-close"></i> Cancelar
                                </button>
                                <button type="button" id="saveEtnia" onclick="guardarEtnia();" class="btn btn-primary">
                                    <i class="ti-save"></i> Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div><!-- /.modal -->
    <!-- MODAL FESTIVIDADES -->
    <div class="modal fade" id="modalFestividades" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Agregar festividad</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="formFestividad">
                        <input type="hidden" name="accFestividad" id="accFestividad" value="guardar" />
                        <input type="hidden" name="idFestividad" id="idFestividad" value="" />
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nombreFestividad" class="form-label">Nombre :</label>
                                    <input type="text" class="form-control" id="nombreFestividad"
                                        name="nombreFestividad">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="nombreEtnia" class="form-label">Marcar como destacada :</label>
                                <br>
                                <label class="switch switch-border switch-primary">
                                    <input type="checkbox" id="festDestacada" name="festDestacada">
                                    <span class="switch-indicator"></span>
                                    <span class="switch-description"></span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contenidoFestividad" class="form-label">Contenido :</label>
                                    <textarea id="contenidoFestividad" name="contenidoFestividad" rows="10" cols="80">

                            </textarea>
                                </div>
                            </div>
                            <div class="box-footer text-end">
                                <button type="button" onclick="newFestividad();" style="display: none;"
                                    id="newFestividad" class="btn btn-primary-light me-1">
                                    <i class="ti-plus "></i> Nuevo
                                </button>
                                <button type="button" id="cancelFestividad" onclick="cancelarFestividad();"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-close"></i> Cancelar
                                </button>
                                <button type="button" id="saveFestividad" onclick="guardarFestividad();"
                                    class="btn btn-primary">
                                    <i class="ti-save"></i> Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div><!-- /.modal -->
    <!-- MODAL SITIOS DE INTERES -->
    <div class="modal fade" id="modalSitiosInteres" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Agregar sitios de interes</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nombreEtnia" class="form-label">Nombre :</label>
                                <input type="text" class="form-control" id="nombreSitioInteres"
                                    name="nombreSitioInteres">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombreEtnia" class="form-label">Marcar como destacado :</label>
                            <br>
                            <label class="switch switch-border switch-primary">
                                <input type="checkbox" id="sitioDestacado" name="sitioDestacado">
                                <span class="switch-indicator"></span>
                                <span class="switch-description"></span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contenidoSitiosInteres" class="form-label">Contenido :</label>
                                <textarea id="contenidoSitiosInteres" name="contenidoSitiosInteres" rows="10" cols="80">

                            </textarea>
                            </div>
                        </div>
                        <div class="box-footer text-end">
                            <button type="button" class="btn btn-primary-light me-1">
                                <i class="ti-trash"></i> Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Guardar
                            </button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div><!-- /.modal -->
    <!-- MODAL PERSONAJES DESTACADOS -->
    <div class="modal fade" id="modalPersonajesDestacados" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Agregar personaje destacado</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nombrePersonaje" class="form-label">Nombre :</label>
                                <input type="text" class="form-control" id="nombrePersonaje" name="nombrePersonaje">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="nombreEtnia" class="form-label">Marcar como destacado :</label>
                            <br>
                            <label class="switch switch-border switch-primary">
                                <input type="checkbox" id="personajeDestacado" name="personajeDestacado">
                                <span class="switch-indicator"></span>
                                <span class="switch-description"></span>
                            </label>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contenidoPersonajeDestacado" class="form-label">Contenido :</label>
                                <textarea id="contenidoPersonajeDestacado" name="contenidoPersonajeDestacado" rows="10" cols="80">
                                </textarea>
                            </div>
                        </div>
                        <div class="box-footer text-end">
                            <button type="button" class="btn btn-primary-light me-1">
                                <i class="ti-trash"></i> Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Guardar
                            </button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div><!-- /.modal -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let menuP = document.getElementById("principalDepartamento");
            let menuS = document.getElementById("principalDepartamentoGestionar");

            menuP.classList.add("active", "menu-open");
            menuS.classList.add("active");


            //ABRIR MODAL SITIOS DE INTERES
            var openModalButton = document.getElementById("openModalSitiosInteres");
            var modal = new bootstrap.Modal(document.getElementById("modalSitiosInteres"), {
                backdrop: 'static',
                keyboard: false
            });

            //ABRIR MODAL PERSONAJES DESTACADOS
            var openModalButton = document.getElementById("openModalPersonajesDestacados");
            var modal = new bootstrap.Modal(document.getElementById("modalPersonajesDestacados"), {
                backdrop: 'static',
                keyboard: false
            });



            $(".tab-wizard").steps({
                headerTag: "h6",
                bodyTag: "section",
                transitionEffect: "none",
                titleTemplate: '<span class="step">#index#</span> #title#',
                labels: {
                    finish: "Finalizar",
                    next: "Siguiente",
                    previous: "Anterior"
                },

                onStepChanging: function(event, currentIndex, newIndex) {
                    if (newIndex > currentIndex && (currentIndex == 10 || currentIndex == 11 ||
                            currentIndex == 12)) {
                        // Permite el cambio de paso sin realizar ninguna acción
                        return true;
                    }
                    // Selecciona el formulario en la sección actual
                    var currentForm = $(".tab-wizard").find("section").eq(currentIndex).find(
                        "form");

                    // Valida el formulario en la sección actual
                    if (currentForm.valid()) {
                        for (var instanceName in CKEDITOR.instances) {
                            CKEDITOR.instances[instanceName].updateElement();
                        }
                        // Recolecta los datos del formulario

                        let idFormulario = currentForm.attr('id');
                        let idDepartamento = document.getElementById("idDepartamento");

                        var formData = new FormData(currentForm[0]);

                        // Opcional: Agrega un identificador único al formulario
                        formData.append('form_id', idFormulario);
                        formData.append('idDepartamento', idDepartamento.value);

                        // Define la URL del backend
                        let url = "{{ route('form.handle') }}";

                        // Enviar los datos del formulario al backend usando fetch
                        fetch(url, {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute('content')
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log("Datos del formulario enviados correctamente:",
                                    data);
                                // Maneja la respuesta del backend aquí
                                if (data.success) {
                                    if (idFormulario == 'descripcion') {
                                        document.getElementById("idDepartamento").value = data
                                            .idDepartamento;
                                    }
                                } else {
                                    // Manejar errores si es necesario
                                    console.error('Error en el procesamiento:', data.message);
                                }
                            })
                            .catch(error => {
                                console.error("Error al enviar los datos:", error);
                                // Maneja el error
                            });
                    } else {
                        return false;
                    }


                    return true; // Permitir el cambio de paso
                },
                onFinished: function(event, currentIndex) {
                    swal("Formulario enviado!", "Gracias por completar todos los pasos.");
                },
                onStepChanged: function(event, currentIndex, priorIndex) {
                    var currentForm = $(".tab-wizard").find("section").eq(currentIndex).find(
                        "form");

                    let idFor = currentForm.attr('id');
                    let idDep = document.getElementById("idDepartamento").value;

                    if (idFor == "etnografia" || idFor == "festividades" ||
                        idFor == "sitiosInteres" || idFor == "personajesDestacados") {
                        buscarLista(idFor, idDep);
                    }
                }
            });


            $('.select2').select2();

            const ids = [
                'contenido',
                'contenidoGeografia',
                'contenidoActividadEconomica',
                'contenidoBandera',
                'contenidoEscudo',
                'contenidoHistoria',
                'contenidoUbicacion',
                'contenidoCoordenadas',
                'contenidoLimites',
                'contenidoRelieve',
                'contenidoHidrografia',
                'contenidoClima',
                'contenidoPoblacion',
                'contenidoDensidad',
                'contenidoSubregiones',
                'contenidoEtnoHistoria',
                'contenidoEtnoHistoriaEtnia',
                'contenidoEconomia',
                'contenidoArte',
                'contenidoDanza',
                'contenidoMusica',
                'contenidoGastronomia',
                'contenidoFestividad',
                'contenidoSitiosInteres',
                'contenidoPersonajeDestacado',
                'contenidoCapital'
            ];

            $(function() {
                "use strict";

                ids.forEach(id => {
                    CKEDITOR.replace(id, {
                        extraPlugins: 'uploadimage,pastefromword,maximize,image',
                        toolbar: [{
                                name: 'basicstyles',
                                items: ['Bold', 'Italic', 'Underline', 'Strike']
                            }, // Formato de texto
                            {
                                name: 'editing',
                                groups: ['find', 'selection', 'spellchecker', 'editing']
                            },
                            {
                                name: 'paragraph',
                                items: ['NumberedList', 'BulletedList', 'Blockquote']
                            }, // Listas y citas
                            {
                                name: 'styles',
                                items: ['Format', 'Font', 'FontSize']
                            }, // Formato, fuente y tamaño
                            {
                                name: 'colors',
                                items: ['TextColor', 'BGColor']
                            }, // Colores de texto y fondo
                            {
                                name: 'align',
                                items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight',
                                    'JustifyBlock'
                                ]
                            }, // Alineación
                            {
                                name: 'links',
                                items: ['Link', 'Unlink']
                            }, // Enlaces
                            {
                                name: 'insert',
                                items: ['Table', 'HorizontalRule', 'Image']
                            }, // Insertar tablas y líneas horizontales
                            {
                                name: 'undo',
                                items: ['Undo', 'Redo']
                            }, // Deshacer y rehacer
                            {
                                name: 'maximize',
                                items: [
                                    'Maximize'
                                ] // Añadir el botón Maximize a la barra de herramientas
                            }
                        ],
                        removePlugins: 'elementspath,mediaembed,flash', // Eliminar plugins innecesarios
                        language: 'es', // Cambia el idioma a español si lo necesitas
                        resize_enabled: true, // Habilitar la opción de redimensionar el editor
                        image_alignClasses: ['image-align-left', 'image-align-center',
                            'image-align-right'
                        ], // Alineación de la imagen
                        height: 300, // Altura del editor
                        resize_enabled: true, // Deshabilitar la opción de redimensionar el editor
                        image_disableResizer: false
                    });
                });
                //bootstrap WYSIHTML5 - text editor
                $('.textarea').wysihtml5();

            });
        });


        function openModalEtnia() {
            var modal = new bootstrap.Modal(document.getElementById("modalEtnografia"), {
                backdrop: 'static',
                keyboard: false
            });

            newEtnias();
            modal.show();
        }

        function openModalFestividad() {
            var modal = new bootstrap.Modal(document.getElementById("modalFestividades"), {
                backdrop: 'static',
                keyboard: false
            });

            newFestividad();
            modal.show();
        }

        function nuevoRegistro() {

            let listado = document.getElementById("listado");
            let formulario = document.getElementById("formulario");

            listado.style.display = "none";
            formulario.style.display = "block";

            document.getElementById("accEtnias").value = "guardar";

            cargarDepartamentos();
        }

        function cargarDepartamentos() {
            let select = document.getElementById("departamento");
            let url = "{{ route('departamentos.list') }}";

            let defaultOption = document.createElement("option");
            defaultOption.value = ""; // Valor en blanco
            defaultOption.text = "Seleccione..."; // Texto que se mostrará
            defaultOption.disabled = true; // Deshabilitar para que no pueda ser seleccionada
            defaultOption.selected = true; // Que aparezca seleccionada por defecto
            select.appendChild(defaultOption);

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    data.forEach(departamento => {

                        let option = document.createElement("option");
                        option.value = departamento.id;
                        option.text = departamento.nombre;
                        option.setAttribute('data-capital', departamento.capital);
                        select.appendChild(option);
                    });
                })
                .catch(error => console.error('Error:', error));
        }

        function mostrarCapital(seletc) {
            let capital = seletc.options[seletc.selectedIndex].getAttribute('data-capital');
            document.getElementById("capital").value = capital;
        }

        function cancelarEtnias() {
            CKEDITOR.instances['contenidoEtnoHistoriaEtnia'].setData('');
            document.getElementById("nombreEtnia").value = ""
            document.getElementById("nombreEtniaAlterno").value = ""
            document.getElementById("etniaLengua").value = ""
        }

        function cancelarFestividad() {
            CKEDITOR.instances['contenidoFestividad'].setData('');
            document.getElementById("nombreFestividad").value = ""
            document.getElementById('festDestacada').checked = false;

        }

        function guardarEtnia() {

            for (var instanceName in CKEDITOR.instances) {
                CKEDITOR.instances[instanceName].updateElement();
            }

            const formEtnias = document.getElementById('formEtnias');
            const formData = new FormData(formEtnias);

            // Agrega un identificador único al formulario
            let idDepartamento = document.getElementById('idDepartamento').value;

            formData.append('idDepartamento', idDepartamento);

            // Define la URL del backend
            const url = "{{ route('form.guardarEtnias') }}";

            // Enviar los datos del formulario al backend usando fetch
            fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {

                    if (data.success) {
                        swal("¡Buen trabajo!",
                            "La operación fue realizada exitosamente",
                            "success");
                        document.getElementById('saveEtnia').setAttribute('disabled', 'disabled')
                        document.getElementById('newEtnia').style.display = 'initial';
                        document.getElementById('cancelEtnias').style.display = 'none';

                        buscarLista('etnografia', idDepartamento);
                        document.getElementById("accEtnias").value = "guardar"
                    } else {
                        console.error('Error en el procesamiento:', data.message);
                    }
                })
                .catch(error => {
                    console.error("Error al enviar los datos:", error);
                });
        }

        function guardarFestividad() {

            for (var instanceName in CKEDITOR.instances) {
                CKEDITOR.instances[instanceName].updateElement();
            }

            const formFestividad = document.getElementById('formFestividad');
            const formData = new FormData(formFestividad);

            // Agrega un identificador único al formulario
            let idDepartamento = document.getElementById('idDepartamento').value;
            formData.append('idDepartamento', idDepartamento);
            document.getElementById('festDestacada').checked ? formData.append('destacada', '1') : formData.append(
                'destacada', '0');

            // Define la URL del backend
            const url = "{{ route('form.guardarFestividad') }}";

            // Enviar los datos del formulario al backend usando fetch
            fetch(url, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {

                    if (data.success) {
                        swal("¡Buen trabajo!",
                            "La operación fue realizada exitosamente",
                            "success");
                        document.getElementById('saveEtnia').setAttribute('disabled', 'disabled')
                        document.getElementById('newEtnia').style.display = 'initial';
                        document.getElementById('cancelEtnias').style.display = 'none';

                        buscarLista('festividad', idDepartamento);
                        document.getElementById("accEtnias").value = "guardar"
                    } else {
                        console.error('Error en el procesamiento:', data.message);
                    }
                })
                .catch(error => {
                    console.error("Error al enviar los datos:", error);
                });
        }

        function newEtnias() {
            cancelarEtnias()

            document.getElementById('saveEtnia').removeAttribute('disabled')
            document.getElementById('newEtnia').style.display = 'none'
            document.getElementById('cancelEtnias').style.display = 'initial'
            document.getElementById("accEtnias").value = "guardar"
        }

        function newFestividad() {
            cancelarFestividad()

            document.getElementById('saveFestividad').removeAttribute('disabled')
            document.getElementById('newFestividad').style.display = 'none'
            document.getElementById('cancelFestividad').style.display = 'initial'
            document.getElementById("accFestividad").value = "guardar"
        }

        function buscarLista(idform, idDepartamento) {

            let url = "{{ route('registros.list') }}";

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idDepartamento: idDepartamento,
                        idform: idform
                    })
                })
                .then(response => response.json())
                .then(data => {

                    if (idform == "etnografia") {
                        let tbody = document.querySelector('#tableEtnias tbody');
                        tbody.innerHTML = ''; // Limpiar la tabla antes de llenarla
                        data.forEach(etnia => {
                            let tr = document.createElement('tr');
                            let tdNombre = document.createElement('td');
                            tdNombre.textContent = etnia.nombre;
                            tr.appendChild(tdNombre);

                            let tdNombreAltero = document.createElement('td');
                            tdNombreAltero.textContent = etnia.nombre_alterno;
                            tr.appendChild(tdNombreAltero);

                            let tdLengua = document.createElement('td');
                            tdLengua.textContent = etnia.lengua;
                            tr.appendChild(tdLengua);

                            let tdAccion = document.createElement('td');
                            tdAccion.classList.add('table-action', 'min-w-100');
                            tdAccion.innerHTML =
                                `<a onclick="editEtnia(${etnia.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                             <a onclick="deleteEtnia(${etnia.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>`;
                            tr.appendChild(tdAccion);

                            tbody.appendChild(tr);
                        });
                    } else if (idform == "festividad") {
                        let tbody = document.querySelector('#tableFestividad tbody');
                        tbody.innerHTML = ''; // Limpiar la tabla antes de llenarla
                        data.forEach(festividad => {
                            let tr = document.createElement('tr');
                            let tdNombre = document.createElement('td');
                            tdNombre.textContent = festividad.nombre;
                            tr.appendChild(tdNombre);

                            let tdAccion = document.createElement('td');
                            tdAccion.classList.add('table-action', 'min-w-100');
                            tdAccion.innerHTML =
                                `<a onclick="editFestividad(${festividad.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                             <a onclick="deleteFestividad(${festividad.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>`;
                            tr.appendChild(tdAccion);

                            tbody.appendChild(tr);
                        });
                    }
                    // Recargar los íconos de feather
                    feather.replace();
                })
                .catch(error => console.error('Error:', error));

        }

        function editEtnia(idEtnia) {
            document.getElementById("idEtnia").value = idEtnia

            var modal = new bootstrap.Modal(document.getElementById("modalEtnografia"), {
                backdrop: 'static',
                keyboard: false
            });

            modal.show();

            document.getElementById("accEtnias").value = "editar"
            document.getElementById('saveEtnia').removeAttribute('disabled')
            document.getElementById('newEtnia').style.display = 'none'
            document.getElementById('cancelEtnias').style.display = 'initial'

            let url = "{{ route('etnias.buscaEtnia') }}";
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idEtnia: idEtnia
                    })
                })
                .then(response => response.json())
                .then(data => {
                    CKEDITOR.instances['contenidoEtnoHistoriaEtnia'].setData(data.contenido);
                    document.getElementById("nombreEtnia").value = data.nombre
                    document.getElementById("nombreEtniaAlterno").value = data.nombre_alterno
                    document.getElementById("etniaLengua").value = data.lengua
                })
                .catch(error => console.error('Error:', error));
        }

        function editFestividad(idFesti) {
            document.getElementById("idFestividad").value = idFesti

            var modal = new bootstrap.Modal(document.getElementById("modalFestividades"), {
                backdrop: 'static',
                keyboard: false
            });

            modal.show();

            document.getElementById("accFestividad").value = "editar"
            document.getElementById('saveFestividad').removeAttribute('disabled')
            document.getElementById('newFestividad').style.display = 'none'
            document.getElementById('cancelFestividad').style.display = 'initial'

            let url = "{{ route('festividad.buscaFesti') }}";

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idFesti: idFesti
                    })
                })
                .then(response => response.json())
                .then(data => {
                    CKEDITOR.instances['contenidoFestividad'].setData(data.contenido);
                    document.getElementById("nombreFestividad").value = data.nombre
                    if (data.destacada == 1) {
                        document.getElementById('festDestacada').checked = true;
                    } else {
                        document.getElementById('festDestacada').checked = false;
                    }
                })
                .catch(error => console.error('Error:', error));

        }

        function deleteEtnia(idEtnia) {
            let idDepartamento = document.getElementById("idDepartamento").value;

            swal({
                title: "Esta seguro?",
                text: "No podrás recuperar este registrto!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fec801",
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    let url = "{{ route('etnias.eliminarEtnia') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idEtnia: idEtnia
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("Eliminar!", "El registro ha sido eliminado.", "success");
                                buscarLista('etnografia', idDepartamento);
                            }
                        })
                        .catch(error => console.error('Error:', error));

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }

        function deleteFestividad(idFesti) {
            let idDepartamento = document.getElementById("idDepartamento").value;

            swal({
                title: "Esta seguro?",
                text: "No podrás recuperar este registrto!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#fec801",
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    let url = "{{ route('festividad.eliminarFestividad') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idFesti: idFesti
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("Eliminar!", "El registro ha sido eliminado.", "success");
                                buscarLista('festividades', idDepartamento);
                            }
                        })
                        .catch(error => console.error('Error:', error));

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }
    </script>

@endsection
