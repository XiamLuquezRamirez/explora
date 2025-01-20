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
                                    <th style="width:40%;">Capital</th>
                                    <th style="width:10%;">Estado</th>
                                    <th style="width:20%;">Acción</th>
                                </tr>
                            </thead>
                            <tbody id="trRegistros">


                            </tbody>
                        </table>
                        <div id="pagination-links" class="text-center ml-1 mt-2">

                        </div>
                    </div>
                </div>
            </div>
            <div id="listadoPreguntas" class="col-12 col-xl-12" style="display: none;">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Listado de preguntas por departamento</h5>
                        <div>
                            <a onclick="atrasPregunta();" class="btn btn-info"><i class="fa fa-mail-reply-all me-10"></i>
                                Atras</a>
                            <a onclick="agregarPregunta();" class="btn btn-primary"><i class="fa fa-plus me-10"></i> Agregar
                                Pregunta</a>
                        </div>
                    </div>

                </div>
                <section>
                    <div class="row" id="regPreguntas">


                    </div>
                    <div id="pagination-linksPreg" class="text-center ml-1 mt-2">

                    </div>
                </section>
            </div>

            <div id="formulario" style="display: none;" class="col-12 col-xl-12">
                <input type="hidden" value="" name="idDepartamento" id="idDepartamento">
                <div class="box">

                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="d-md-flex d-block align-items-center justify-content-between">
                                    <h4 class="box-title">Registro de departmanto </h4>
                                    <a onclick="mostrarListado();" style="cursor: pointer;" class="btn btn-primary"><i
                                            class="fa fa-reply"></i> Volver a listado</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body wizard-content">
                        <div class="tab-wizard vertical wizard-circle">
                            <!-- Step 1 -->
                            <h6>Descripción</h6>
                            <section>
                                <form id="descripcion">
                                    <input type="hidden" name="idDescripcion" id="idDescripcion" value="" />
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
                                                <input type="text" class="form-control" id="poblacion"
                                                    name="poblacion">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="clima" class="form-label">Clima :</label>
                                                <select class="form-select" id="clima" name="clima">
                                                    <option value="">Seleccione...</option>
                                                    <option value="húmedo">Clima tropical húmedo</option>
                                                    <option value="calido">Clima tropical Calido</option>
                                                    <option value="seco">Clima seco</option>
                                                    <option value="templado">Clima templado</option>
                                                    <option value="montaña">Clima de montaña</option>
                                                    <option value="tropical">Clima tropical</option>
                                                    <option value="calido2">Clima calido</option>
                                                    <option value="frio">Clima frio</option>
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
                                            <h4 class="header-title">Otra información.</h4>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                                    <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                                        <li class="nav-item" style="display: none;">
                                                            <a href="#Geografia-b2" data-bs-toggle="tab"
                                                                aria-expanded="false" class="nav-link">
                                                                <span class="d-none d-md-block">Geografia</span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item" style="display: none;">
                                                            <a href="#ActividadEconomica-b2" data-bs-toggle="tab"
                                                                aria-expanded="false" class="nav-link">
                                                                <span class="d-none d-md-block">Actividad Economica</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#Bandera-b2" data-bs-toggle="tab"
                                                                aria-expanded="false" class="nav-link active">
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
                                                        <div class="tab-pane" id="Geografia-b2">
                                                            <textarea id="contenidoGeografia" name="contenidoGeografia" rows="10" cols="80">
                                                
                                                        </textarea>
                                                        </div>

                                                        <div class="tab-pane" id="ActividadEconomica-b2">
                                                            <textarea id="contenidoActividadEconomica" name="contenidoActividadEconomica" rows="10" cols="80">
                                                
                                                        </textarea>
                                                        </div>
                                                        <div class="tab-pane  show active" id="Bandera-b2">
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
                                    <input type="hidden" name="idHistoria" id="idHistoria" value="" />

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
                                    <input type="hidden" name="idGeografia" id="idGeografia" value="" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="display: none;" for="contenidoUbicacion"
                                                    class="form-label">Ubicación:</label>
                                                <textarea id="contenidoUbicacion" name="contenidoUbicacion" rows="10" cols="80">
                                            </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12" style="display: none;">
                                            <div class="form-group">
                                                <label for="contenidoCoordenadas" class="form-label">Coordenadas :</label>
                                                <textarea id="contenidoCoordenadas" name="contenidoCoordenadas" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12" style="display: none;">
                                            <div class="form-group">
                                                <label for="contenidoLimites" class="form-label">Límites :</label>
                                                <textarea id="contenidoLimites" name="contenidoLimites" rows="10" cols="80">
                                                
                                            </textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12" style="display: none;">
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
                                    <input type="hidden" name="idHidrografia" id="idHidrografia" value="" />

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
                                    <input type="hidden" name="idClima" id="idClima" value="" />
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
                                    <input type="hidden" name="idDemografia" id="idDemografia" value="" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{-- <label for="contenidoPoblacion" class="form-label">Población :</label> --}}
                                                <textarea id="contenidoPoblacion" name="contenidoPoblacion" rows="10" cols="80">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div style="display: none;" class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoDensidad" class="form-label">Densidad :</label>
                                                <textarea id="contenidoDensidad" name="contenidoDensidad" rows="10" cols="80">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div style="display: none;" class="col-md-12">
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
                                    <input type="hidden" name="idEtnografia" id="idEtnografia" value="" />
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
                            <h6>Fauna y Flora</h6>
                            <section>
                                <form id="faunaflora">
                                    <input type="hidden" name="idFauFlora" id="idFauFlora" value="" />
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                            <ul class="nav nav-tabs nav-justified nav-bordered mb-3">

                                                <li class="nav-item">
                                                    <a href="#Fauna-b2" data-bs-toggle="tab" aria-expanded="false"
                                                        class="nav-link active">
                                                        <span class="d-none d-md-block"><i class="fa fa-paw"></i>
                                                            Fauna</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#Flora-b2" data-bs-toggle="tab" aria-expanded="false"
                                                        class="nav-link">
                                                        <span class="d-none d-md-block"><i class="fa fa-leaf"></i>
                                                            Flora</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-20">
                                                <div class="tab-pane  show active" id="Fauna-b2">
                                                    <label for="contenidoFauna" class="form-label">Fauna :</label>
                                                    <textarea id="contenidoFauna" name="contenidoFauna" rows="10" cols="80">
                                                  </textarea>
                                                    <div class="row mt-4">
                                                        <h4 class="header-title">Listado de fauna.</h4>
                                                        <div class="col-md-2 offset-md-10" style="text-align: right;">
                                                            <button type="button" id="openModalEtnias"
                                                                onclick="openModalFauna();"
                                                                class="waves-effect waves-light btn btn-primary mb-5"><i
                                                                    class="fa fa-plus"></i>
                                                                Agregar</button>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <table id="tableFauna" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width:35%;">Nombre</th>
                                                                        <th style="width:10%;">Acción</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="Flora-b2">
                                                    <label for="contenidoFlora" class="form-label">Flora :</label>
                                                    <textarea id="contenidoFlora" name="contenidoFlora" rows="10" cols="80">
                                                    </textarea>
                                                    <div class="row mt-4">
                                                        <h4 class="header-title">Listado de flora.</h4>
                                                        <div class="col-md-2 offset-md-10" style="text-align: right;">
                                                            <button type="button" id="openModalEtnias"
                                                                onclick="openModalFlora();"
                                                                class="waves-effect waves-light btn btn-primary mb-5"><i
                                                                    class="fa fa-plus"></i>
                                                                Agregar</button>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <table id="tableFlora" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width:35%;">Nombre</th>
                                                                        <th style="width:10%;">Acción</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="bordered-justified-tabs-code">
                                            <pre class="mb-0">
                                          
                                        </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div>


                                </form>
                            </section>
                            <!-- Step 9 -->
                            <h6>Economía</h6>
                            <section>
                                <form id="economia">
                                    <input type="hidden" name="idEconomia" id="idEconomia" value="" />

                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="contenidoEconomia" name="contenidoEconomia" rows="10" cols="80">
                                                
                                        </textarea>

                                        </div>

                                    </div>
                                </form>
                            </section>
                            <!-- Step 10 -->
                            <h6>
                                Cultura
                            </h6>
                            <section>
                                <form id="cultura">
                                    <input type="hidden" name="idCultura" id="idCultura" value="" />

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoCultura" style="display: none;"
                                                    class="form-label">Descripción :</label>
                                                <textarea id="contenidoCultura" name="contenidoCultura" rows="10" cols="80">
                                                  
                                              </textarea>
                                            </div>

                                        </div>
                                        <div style="display: none;" class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoArte" class="form-label">Arte :</label>
                                                <textarea id="contenidoArte" name="contenidoArte" rows="10" cols="80">
                                                  
                                              </textarea>
                                            </div>

                                        </div>
                                        <div style="display: none;" class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoDanza" class="form-label">Danza :</label>
                                                <textarea id="contenidoDanza" name="contenidoDanza" rows="10" cols="80">
                                                  
                                              </textarea>
                                            </div>

                                        </div>
                                        <div style="display: none;" class="col-md-12">
                                            <div class="form-group">
                                                <label for="contenidoMusica" class="form-label">Música :</label>
                                                <textarea id="contenidoMusica" name="contenidoMusica" rows="10" cols="80">
                                                  
                                              </textarea>
                                            </div>

                                        </div>

                                    </div>
                                </form>
                            </section>
                            <!-- Step 11 -->
                            <h6>Gastronomía</h6>
                            <section>
                                <form id="gastronomia">
                                    <input type="hidden" name="idGastronomia" id="idGastronomia" value="" />
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="contenidoGastronomia" name="contenidoGastronomia" rows="10" cols="80">
                                                
                                        </textarea>
                                        </div>
                                    </div>
                                </form>
                            </section>

                            <!-- Step 12 -->
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
                                                            <th style="width:85%;">Nombre</th>
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
                            <!-- Step 13 -->
                            <h6>Sitios de interes</h6>
                            <section>
                                <form id="sitiosInteres">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="header-title">Listado de sitios de interes.</h4>
                                            <div class="col-md-2 offset-md-10" style="text-align: right;">
                                                <button type="button" id="openModalSitios" onclick="openModalSitio();"
                                                    class="waves-effect waves-light btn btn-primary mb-5"><i
                                                        class="fa fa-plus"></i>
                                                    Agregar</button>
                                            </div>

                                            <div class="col-md-12">
                                                <table id="tableSitios" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:85%;">Nombre</th>
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
                            <!-- Step 14 -->
                            <h6>Personajes destacados</h6>
                            <section>
                                <form id="personajesDestacados">
                                    <div class="row">
                                        <div class="row">
                                            <h4 class="header-title">Listado de personajes destacados.</h4>
                                            <div class="col-md-2 offset-md-10" style="text-align: right;">
                                                <button type="button" id="openModalPersonajes"
                                                    onclick="openModalPersonaje();"
                                                    class="waves-effect waves-light btn btn-primary mb-5"><i
                                                        class="fa fa-plus"></i>
                                                    Agregar</button>
                                            </div>

                                            <div class="col-md-12">
                                                <table id="tablePersonajes" class="table table-striped">
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

                            <!-- Step 15 -->
                            <h6>Capital</h6>
                            <section>
                                <form id="capital">
                                    <input type="hidden" name="idCapital" id="idCapital" value="" />

                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="contenidoCapital" name="contenidoCapital" rows="10" cols="80">
                                           </textarea>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <!-- Step 16 -->
                            <h6>Referencias</h6>
                            <section>
                                <form id="referencia">
                                    <input type="hidden" name="idReferencia" id="idReferencia" value="" />

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="referencia" class="form-label">Referencia :</label>
                                                <textarea class="textarea" name="contenidoReferencia" id="contenidoReferencia"
                                                    placeholder="Por favor ingresar las referencias"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="webgrafia" class="form-label">Webgrafia :</label>
                                                <textarea class="textarea" name="contenidoWebgrafia" id="contenidoWebgrafia"
                                                    placeholder="Por favor ingresar las webgrafias"
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
                            < </div>
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
                                <label for="festDestacada" class="form-label">Marcar como destacada :</label>
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
                                <button type="button" onclick="newFestividadades();" style="display: none;"
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
                    <form id="formSitios">
                        <input type="hidden" name="accSitios" id="accSitios" value="guardar" />
                        <input type="hidden" name="idSitios" id="idSitios" value="" />
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nombreSitioInteres" class="form-label">Nombre :</label>
                                    <input type="text" class="form-control" id="nombreSitioInteres"
                                        name="nombreSitioInteres">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="sitioDestacado" class="form-label">Marcar como destacado :</label>
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
                                <button type="button" onclick="newSitios();" style="display: none;" id="newSitio"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-plus "></i> Nuevo
                                </button>
                                <button type="button" id="cancelSitio" onclick="cancelarSitios();"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-close"></i> Cancelar
                                </button>
                                <button type="button" id="saveSitio" onclick="guardarSitios();"
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
    <!-- MODAL FAUNA -->
    <div class="modal fade" id="modalFauna" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Agregar fauna</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="formFauna">
                        <input type="hidden" name="accFauna" id="accFauna" value="guardar" />
                        <input type="hidden" name="idFauna" id="idFauna" value="" />
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nombreFauna" class="form-label">Nombre :</label>
                                    <input type="text" class="form-control" id="nombreFauna" name="nombreFauna">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="faunaDestacado" class="form-label">Marcar como destacado :</label>
                                <br>
                                <label class="switch switch-border switch-primary">
                                    <input type="checkbox" id="faunaDestacado" name="faunaDestacado">
                                    <span class="switch-indicator"></span>
                                    <span class="switch-description"></span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contenidoFaunaList" class="form-label">Contenido :</label>
                                    <textarea id="contenidoFaunaList" name="contenidoFaunaList" rows="10" cols="80">

                            </textarea>
                                </div>
                            </div>
                            <div class="box-footer text-end">
                                <button type="button" onclick="newFaunas();" style="display: none;" id="newFauna"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-plus "></i> Nuevo
                                </button>
                                <button type="button" id="cancelFauna" onclick="cancelarFaunas();"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-close"></i> Cancelar
                                </button>
                                <button type="button" id="saveFauna" onclick="guardarFauna();" class="btn btn-primary">
                                    <i class="ti-save"></i> Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div><!-- /.modal -->
    <!-- MODAL FLORA -->
    <div class="modal fade" id="modalFlora" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Agregar flora</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="formFlora">
                        <input type="hidden" name="accFlora" id="accFlora" value="guardar" />
                        <input type="hidden" name="idFlora" id="idFlora" value="" />
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nombreFlora" class="form-label">Nombre :</label>
                                    <input type="text" class="form-control" id="nombreFlora" name="nombreFlora">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="floraDestacado" class="form-label">Marcar como destacado :</label>
                                <br>
                                <label class="switch switch-border switch-primary">
                                    <input type="checkbox" id="floraDestacado" name="floraDestacado">
                                    <span class="switch-indicator"></span>
                                    <span class="switch-description"></span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contenidoFloraList" class="form-label">Contenido :</label>
                                    <textarea id="contenidoFloraList" name="contenidoFloraList" rows="10" cols="80">

                            </textarea>
                                </div>
                            </div>
                            <div class="box-footer text-end">
                                <button type="button" onclick="newFloras();" style="display: none;" id="newFlora"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-plus "></i> Nuevo
                                </button>
                                <button type="button" id="cancelFlora" onclick="cancelarFloras();"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-close"></i> Cancelar
                                </button>
                                <button type="button" id="saveFlora" onclick="guardarFlora();" class="btn btn-primary">
                                    <i class="ti-save"></i> Guardar
                                </button>
                            </div>
                        </div>
                    </form>
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
                    <form id="formPersonajes">
                        <input type="hidden" name="accPersonajes" id="accPersonajes" value="guardar" />
                        <input type="hidden" name="idPersonajes" id="idPersonajes" value="" />

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nombrePersonaje" class="form-label">Nombre :</label>
                                    <input type="text" class="form-control" id="nombrePersonaje"
                                        name="nombrePersonaje">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="personajeDestacado" class="form-label">Marcar como destacado :</label>
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
                                <button type="button" onclick="newPersonajes();" style="display: none;"
                                    id="newPersonaje" class="btn btn-primary-light me-1">
                                    <i class="ti-plus "></i> Nuevo
                                </button>
                                <button type="button" id="cancelPersonaje" onclick="cancelarPersonajes();"
                                    class="btn btn-primary-light me-1">
                                    <i class="ti-close"></i> Cancelar
                                </button>
                                <button type="button" id="savePersonaje" onclick="guardarPersonajes();"
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
    <!-- MODAL PREGUNTAS -->
    <div class="modal fade" id="modalPreguntas" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Agregar pregunta</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <form id="formPregunta">
                        <input type="hidden" name="accPregunta" id="accPregunta" value="guardar" />
                        <input type="hidden" name="idPregunta" id="idPregunta" value="" />

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipoPreg" class="form-label">Tipo de pregunta :</label>
                                    <select class="form-select" onchange="cambioPregunta(this.value);" id="tipoPreg"
                                        name="tipoPreg">
                                        <option value="">Seleccione...</option>
                                        <option value="multiple">Pregunta opción multiple</option>
                                        <option value="verfal">Pregunta verdadero y falso</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div id="multiple" style="display: none;" class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pregunta" class="form-label">Pregunta :</label>
                                    <textarea rows="4" id="contPregunta" name="contPregunta" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header" style="padding: 0.5rem;">
                                        <h6 class="card-title">Opciones.</h6>

                                    </div>
                                    <div class="card-body">
                                        <div id="opcionesPreg">

                                        </div>
                                        <div class="d-grid mt-3">
                                            <a href="javascript:addOpcion()" class="btn btn-primary">Agregar opción</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="verfal" style="display: none;" class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="preguntaVerfal" class="form-label">Pregunta :</label>
                                    <textarea rows="4" id="preguntaVerfal" name="preguntaVerfal" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header" style="padding: 0.5rem;">
                                        <h6 class="card-title">Respuesta.</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="opcionesVerFal">
                                            <div class="input-group mb-1">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="checkVerFal[]" value="1"
                                                        id="addon_CheckboxVerFal_1" onclick="checkOnlyThisVerFal(this)">
                                                    <label for="addon_CheckboxVerFal_1">Verdadero</label>
                                                </span>
                                            </div>
                                            <div class="input-group mb-1">
                                                <span class="input-group-addon">
                                                    <input type="checkbox" name="checkVerFal[]" value="0"
                                                        id="addon_CheckboxVerFal_0" onclick="checkOnlyThisVerFal(this)">
                                                    <label for="addon_CheckboxVerFal_0">Falso</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer text-end">
                            <button type="button" onclick="newPreguntas();" style="display: none;" id="newPregunta"
                                class="btn btn-primary-light me-1">
                                <i class="ti-plus "></i> Nueva
                            </button>
                            <button type="button" id="cancelPregunta" onclick="cancelarPregunta();"
                                class="btn btn-primary-light me-1">
                                <i class="ti-close"></i> Cancelar
                            </button>
                            <button type="button" id="savePregunta" onclick="guardarPregunta();"
                                class="btn btn-primary">
                                <i class="ti-save"></i> Guardar
                            </button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div><!-- /.modal -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let menuP = document.getElementById("principalDepartamento");
            let menuS = document.getElementById("principalDepartamentoGestionar");
            document.getElementById("divBusquedaGen").style.display = 'none';
            menuP.classList.add("active", "menu-open");
            menuS.classList.add("active");

            loader = document.getElementById('loader');
            loadNow(1);

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
                    if (currentIndex == 11 || currentIndex == 12 || currentIndex == 13) {
                        return true; // Permitir el cambio de pestaña sin hacer el guardado
                    }

                    if (newIndex > currentIndex) {
                        // Selecciona el formulario en la sección actual
                        var currentForm = $(".tab-wizard").find("section").eq(currentIndex).find(
                            "form");
                        let result = validarFormulario(currentForm)
                        // Valida el formulario en la sección actual
                        if (currentForm.valid()) {
                            guardarFormulario(currentForm);
                        } else {
                            return false;
                        }
                    }

                    return true; // Permitir el cambio de paso
                },
                onFinished: function(event, currentIndex) {
                    var currentForm = $(".tab-wizard").find("section").eq(currentIndex).find(
                        "form");

                    let result = validarFormulario(currentForm)

                    if (currentForm.valid()) {
                        guardarFormulario(currentForm);
                        swal("¡Buen trabajo!",
                            "La operación fue realizada exitosamente",
                            "success");
                        setTimeout(() => {
                            cargarListaDepartamentos(1)
                            mostrarListado()
                        }, 1000);
                    }
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
                'contenidoFauna',
                'contenidoFlora',
                'contenidoEconomia',
                'contenidoCultura',
                'contenidoArte',
                'contenidoDanza',
                'contenidoMusica',
                'contenidoGastronomia',
                'contenidoFestividad',
                'contenidoSitiosInteres',
                'contenidoPersonajeDestacado',
                'contenidoCapital',
                'contenidoReferencia',
                'contenidoWebgrafia',
                'contenidoFloraList',
                'contenidoFaunaList'
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

            });

            //VALIDAR ETNIAS
            $("#formEtnias").validate({
                rules: {
                    nombreEtnia: {
                        required: true
                    }
                },
                messages: {
                    nombreEtnia: {
                        required: "Por favor, ingresa el nombre de la etnia."
                    }
                },
                // Realiza la acción cuando el formulario es válido
                submitHandler: function(form) {
                    guardarEtnia(); // Llama a tu función de guardar
                }
            });

            //VALIDAR FESTIVIDAD
            $("#formFestividad").validate({
                rules: {
                    nombreFestividad: {
                        required: true
                    }
                },
                messages: {
                    nombreFestividad: {
                        required: "Por favor, ingresa el nombre de la festividad."
                    }
                },
                // Realiza la acción cuando el formulario es válido
                submitHandler: function(form) {
                    guardarFestividad(); // Llama a tu función de guardar
                }
            });
            //VALIDAR SITIOS
            $("#formSitios").validate({
                rules: {
                    nombreSitioInteres: {
                        required: true
                    }
                },
                messages: {
                    nombreSitioInteres: {
                        required: "Por favor, ingresa el nombre del sitio de interes."
                    }
                },
                // Realiza la acción cuando el formulario es válido
                submitHandler: function(form) {
                    guardarSitios(); // Llama a tu función de guardar
                }
            });

            //VALIDAR PERSONAJES
            $("#formPersonajes").validate({
                rules: {
                    nombrePersonaje: {
                        required: true
                    }
                },
                messages: {
                    nombrePersonaje: {
                        required: "Por favor, ingresa el nombre del personaje destacado."
                    }
                },
                // Realiza la acción cuando el formulario es válido
                submitHandler: function(form) {
                    guardarPersonajes(); // Llama a tu función de guardar
                }
            });


            cargarListaDepartamentos(1);

            // Evento click para la paginación
            document.addEventListener('click', function(event) {
                if (event.target.matches('.pagination a')) {
                    event.preventDefault();
                    var href = event.target.getAttribute('href');
                    var page = href.split('page=')[1];

                    // Asegurarse de que 'page' sea un número antes de hacer la solicitud
                    if (!isNaN(page)) {
                        cargarListaDepartamentos(page);
                    }
                }
            });

            document.addEventListener('click', async function(event) {
                if (event.target.matches('.pag2 a')) {
                    event.preventDefault();
                    var href = event.target.getAttribute('href');
                    var page = href.split('page=')[1];

                    // Asegurarse de que 'page' sea un número antes de hacer la solicitud
                    if (!isNaN(page)) {
                        await cargarPreguntasDepartamento(page);
                    }
                }
            });


            // Evento input para el campo de búsqueda
            document.getElementById('busqueda').addEventListener('input', function() {
                var searchTerm = this.value;
                cargarListaDepartamentos(1,
                    searchTerm); // Cargar la primera página con el término de búsqueda
            });

        });


        function validarFormulario(currentForm) {
            currentForm.validate({
                rules: {
                    departamento: {
                        required: true
                    },
                    poblacion: {
                        required: true,
                        digits: true // Asegura que el campo sea numérico
                    },
                    clima: {
                        required: true
                    },
                    contenido: {
                        required: function() {
                            // Valida que el editor CKEditor no esté vacío
                            return CKEDITOR.instances['contenido'].getData().trim() === '';
                        }
                    }
                },
                messages: {
                    departamento: {
                        required: "Por favor, selecciona un departamento."
                    },
                    poblacion: {
                        required: "Por favor, ingresa la población.",
                        digits: "Por favor, ingresa solo números en población."
                    },
                    clima: {
                        required: "Por favor, selecciona un clima."
                    },
                    contenido: {
                        required: "Por favor, ingresa contenido."
                    }
                }
            });

        }

        function openModalEtnia() {
            var modal = new bootstrap.Modal(document.getElementById("modalEtnografia"), {
                backdrop: 'static',
                keyboard: false
            });

            newEtnias();
            modal.show();
        }

        function openModalFauna() {
            var modal = new bootstrap.Modal(document.getElementById("modalFauna"), {
                backdrop: 'static',
                keyboard: false
            });

            newFaunas();
            modal.show();
        }

        function openModalFlora() {
            var modal = new bootstrap.Modal(document.getElementById("modalFlora"), {
                backdrop: 'static',
                keyboard: false
            });

            newFloras();
            modal.show();
        }

        function openModalFestividad() {
            var modal = new bootstrap.Modal(document.getElementById("modalFestividades"), {
                backdrop: 'static',
                keyboard: false
            });

            newFestividadades();
            modal.show();
        }

        function openModalSitio() {
            var modal = new bootstrap.Modal(document.getElementById("modalSitiosInteres"), {
                backdrop: 'static',
                keyboard: false
            });

            newSitios();
            modal.show();
        }

        function openModalPersonaje() {
            var modal = new bootstrap.Modal(document.getElementById("modalPersonajesDestacados"), {
                backdrop: 'static',
                keyboard: false
            });

            newPersonajes();
            modal.show();
        }

        function newPreguntas() {
            consOpcion = 0
            document.getElementById("tipoPreg").value = ""
            document.getElementById("contPregunta").value = ""
            document.getElementById("preguntaVerfal").value = ""
            document.getElementById("opcionesPreg").innerHTML = ""
            addOpcion()
            document.getElementById("multiple").style.display = "none"
            document.getElementById("verfal").style.display = "none"

            const checkboxes = document.getElementsByName('checkVerFal[]');
            checkboxes.forEach(function(item) {
                item.checked = false;
            });

            document.getElementById('savePregunta').removeAttribute('disabled')
            document.getElementById('newPregunta').style.display = 'none'
            document.getElementById('cancelPregunta').style.display = 'initial'
        }

        function cancelarPregunta() {
            consOpcion = 0
            document.getElementById("tipoPreg").value = ""
            document.getElementById("contPregunta").value = ""
            document.getElementById("preguntaVerfal").value = ""
            document.getElementById("opcionesPreg").innerHTML = ""
            document.getElementById("multiple").style.display = "none"
            document.getElementById("verfal").style.display = "none"

            const checkboxes = document.getElementsByName('checkVerFal[]');
            checkboxes.forEach(function(item) {
                item.checked = false;
            });

            document.getElementById('savePregunta').removeAttribute('disabled')
            document.getElementById('newPregunta').style.display = 'none'
            document.getElementById('cancelPregunta').style.display = 'initial'
        }

        function guardarFormulario(currentForm) {

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
        }

        function nuevoRegistro() {

            let listado = document.getElementById("listado");
            let formulario = document.getElementById("formulario");

            listado.style.display = "none";
            formulario.style.display = "block";

            $(".tab-wizard").find(".steps li").not(":first").addClass("disabled");
            limpiarFormularios();
            cargarDepartamentos();
        }

        function mostrarListado() {
            let listado = document.getElementById("listado");
            let formulario = document.getElementById("formulario");

            listado.style.display = "block";
            formulario.style.display = "none";
        }

        function cargarDepartamentos() {
            return new Promise((resolve, reject) => {
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
                        resolve(); // Resuelve la promesa cuando los datos han sido cargados
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        reject(error); // Rechaza la promesa si ocurre un error
                    });
            });
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

        function cancelarFaunas() {
            CKEDITOR.instances['contenidoFaunaList'].setData('')
            document.getElementById('faunaDestacado').checked = false
            document.getElementById("nombreFauna").value = ""
        }

        function cancelarFloras() {
            CKEDITOR.instances['contenidoFloraList'].setData('')
            document.getElementById('floraDestacado').checked = false
            document.getElementById("nombreFlora").value = ""
        }

        function cancelarFestividad() {
            CKEDITOR.instances['contenidoFestividad'].setData('');
            document.getElementById("nombreFestividad").value = ""
            document.getElementById('festDestacada').checked = false;

        }

        function cancelarSitios() {
            CKEDITOR.instances['contenidoSitiosInteres'].setData('');
            document.getElementById("nombreSitioInteres").value = ""
            document.getElementById('sitioDestacado').checked = false;

        }

        function cancelarPersonajes() {
            CKEDITOR.instances['contenidoPersonajeDestacado'].setData('');
            document.getElementById("nombrePersonaje").value = ""
            document.getElementById('personajeDestacado').checked = false;

        }

        function guardarEtnia() {

            if ($("#formEtnias").valid()) {

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
        }

        function guardarFestividad() {
            if ($("#formFestividad").valid()) {
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
                            document.getElementById('saveFestividad').setAttribute('disabled', 'disabled')
                            document.getElementById('newFestividad').style.display = 'initial';
                            document.getElementById('cancelFestividad').style.display = 'none';

                            buscarLista('festividad', idDepartamento);
                            document.getElementById("accFestividad").value = "guardar"
                        } else {
                            console.error('Error en el procesamiento:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error al enviar los datos:", error);
                    });

            }
        }

        function guardarSitios() {
            if ($("#formSitios").valid()) {
                for (var instanceName in CKEDITOR.instances) {
                    CKEDITOR.instances[instanceName].updateElement();
                }

                const formSitios = document.getElementById('formSitios');
                const formData = new FormData(formSitios);

                // Agrega un identificador único al formulario
                let idDepartamento = document.getElementById('idDepartamento').value;
                formData.append('idDepartamento', idDepartamento);
                document.getElementById('sitioDestacado').checked ? formData.append('destacada', '1') : formData.append(
                    'destacada', '0');

                // Define la URL del backend
                const url = "{{ route('form.guardarSitio') }}";

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
                            document.getElementById('saveSitio').setAttribute('disabled', 'disabled')
                            document.getElementById('newSitio').style.display = 'initial';
                            document.getElementById('cancelSitio').style.display = 'none';

                            buscarLista('Sitios', idDepartamento);
                            document.getElementById("accSitios").value = "guardar"
                        } else {
                            console.error('Error en el procesamiento:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error al enviar los datos:", error);
                    });

            }
        }

        function guardarFauna() {
            if ($("#formFauna").valid()) {
                for (var instanceName in CKEDITOR.instances) {
                    CKEDITOR.instances[instanceName].updateElement();
                }

                const formFauna = document.getElementById('formFauna');
                const formData = new FormData(formFauna);

                // Agrega un identificador único al formulario
                let idDepartamento = document.getElementById('idDepartamento').value;
                formData.append('idDepartamento', idDepartamento);
                document.getElementById('faunaDestacado').checked ? formData.append('destacada', '1') : formData.append(
                    'destacada', '0');

                // Define la URL del backend
                const url = "{{ route('form.guardarFauna') }}";

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
                            document.getElementById('saveFauna').setAttribute('disabled', 'disabled')
                            document.getElementById('newFauna').style.display = 'initial';
                            document.getElementById('cancelFauna').style.display = 'none';

                            buscarLista('fauna', idDepartamento);
                            document.getElementById("accFauna").value = "guardar"
                        } else {
                            console.error('Error en el procesamiento:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error al enviar los datos:", error);
                    });

            }
        }

        function guardarFlora() {
            if ($("#formFlora").valid()) {
                for (var instanceName in CKEDITOR.instances) {
                    CKEDITOR.instances[instanceName].updateElement();
                }

                const formFlora = document.getElementById('formFlora');
                const formData = new FormData(formFlora);

                // Agrega un identificador único al formulario
                let idDepartamento = document.getElementById('idDepartamento').value;
                formData.append('idDepartamento', idDepartamento);
                document.getElementById('floraDestacado').checked ? formData.append('destacada', '1') : formData.append(
                    'destacada', '0');

                // Define la URL del backend
                const url = "{{ route('form.guardarFlora') }}";

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
                            document.getElementById('saveFlora').setAttribute('disabled', 'disabled')
                            document.getElementById('newFlora').style.display = 'initial';
                            document.getElementById('cancelFlora').style.display = 'none';

                            buscarLista('flora', idDepartamento);
                            document.getElementById("accFlora").value = "guardar"
                        } else {
                            console.error('Error en el procesamiento:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error al enviar los datos:", error);
                    });

            }
        }

        function editPreg(idPreg) {
            var modal = new bootstrap.Modal(document.getElementById("modalPreguntas"), {
                backdrop: 'static',
                keyboard: false
            });

            document.getElementById("idPregunta").value = idPreg
            modal.show();
            document.getElementById("accPregunta").value = "editar"
            document.getElementById('savePregunta').removeAttribute('disabled')
            document.getElementById('newPregunta').style.display = 'none'
            document.getElementById('cancelPregunta').style.display = 'initial'

            let url = "{{ route('preguntas.buscaPregunta') }}";
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idPreg: idPreg
                    })
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById("tipoPreg").value = data.tipo_pregunta
                    if (data.tipo_pregunta == 'multiple') {
                        document.getElementById("contPregunta").value = data.pregunta
                        let opciones = document.getElementById("opcionesPreg");
                        opciones.innerHTML = ''
                        let correcta;

                        data.opciones.forEach((pregunta) => {
                            let listItem = document.createElement('div'); // Mover aquí la creación del listItem
                            correcta = pregunta.correcta == 1 ? 'checked' : '';
                            listItem.innerHTML = `<div id="divOpcion-${consOpcion}" class="input-group mb-1">
                                                <span class="input-group-addon">
                                                <input type="checkbox" ${correcta} name="checkOpcionesPreg[]" value="${consOpcion}" id="addon_Checkbox_${consOpcion}" onclick="checkOnlyThis(this)">
                                                <label for="addon_Checkbox_${consOpcion}" style="padding-left: 20px; height: 17px;"></label>
                                                </span>
                                                <input type="text" value="${pregunta.opcion}" name="textOpcionesPreg[]" class="form-control">
                                                <span class="input-group-addon">
                                                <a href="javascript:deleteOpcion(${consOpcion})" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Eliminar">
                                                    <i class="ti-trash" aria-hidden="true"></i>
                                                </a>
                                                </span>
                                            </div>`;
                            opciones.appendChild(listItem);
                            consOpcion++;
                        });
                        document.getElementById("multiple").style.display = "block";
                        document.getElementById("verfal").style.display = "none";
                    } else {
                        document.getElementById("preguntaVerfal").value = data.pregunta

                        if (data.verFal == 1) {
                            document.getElementById("addon_CheckboxVerFal_1").checked = true
                            document.getElementById("addon_CheckboxVerFal_0").checked = false
                        } else {
                            document.getElementById("addon_CheckboxVerFal_1").checked = false;
                            document.getElementById("addon_CheckboxVerFal_0").checked = true;
                        }

                        document.getElementById("multiple").style.display = "none";
                        document.getElementById("verfal").style.display = "block";

                    }

                })
                .catch(error => console.error('Error:', error));
        }

        function deletePreg(id) {

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
                    let url = "{{ route('preguntas.eliminarPregunta') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idPreg: id
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("¡Buen trabajo!",
                                    data.message,
                                    "success");
                                cargarPreguntasDepartamento();
                            } else {
                                swal("¡Alerta!",
                                    "La operación fue realizada exitosamente",
                                    data.message,
                                    "success");
                            }
                        })

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }

        function eliminarDepartamento(id) {

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
                    let url = "{{ route('departamento.eliminarDepartamento') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idDepar: id
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("¡Buen trabajo!",
                                    data.message,
                                    "success");
                                cargarListaDepartamentos();
                            } else {
                                swal("¡Alerta!",
                                    "La operación fue realizada exitosamente",
                                    data.message,
                                    "success");
                            }
                        })

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }

        function guardarPersonajes() {
            if ($("#formPersonajes").valid()) {
                for (var instanceName in CKEDITOR.instances) {
                    CKEDITOR.instances[instanceName].updateElement();
                }

                const formPersonajes = document.getElementById('formPersonajes');
                const formData = new FormData(formPersonajes);

                // Agrega un identificador único al formulario
                let idDepartamento = document.getElementById('idDepartamento').value;
                formData.append('idDepartamento', idDepartamento);
                document.getElementById('personajeDestacado').checked ? formData.append('destacada', '1') : formData.append(
                    'destacada', '0');

                // Define la URL del backend
                const url = "{{ route('form.guardarPersonaje') }}";

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
                            document.getElementById('savePersonaje').setAttribute('disabled', 'disabled')
                            document.getElementById('newPersonaje').style.display = 'initial';
                            document.getElementById('cancelPersonaje').style.display = 'none';

                            buscarLista('personajes', idDepartamento);
                            document.getElementById("accPersonajes").value = "guardar"
                        } else {
                            console.error('Error en el procesamiento:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error al enviar los datos:", error);
                    });
            }
        }

        function newEtnias() {
            cancelarEtnias()

            document.getElementById('saveEtnia').removeAttribute('disabled')
            document.getElementById('newEtnia').style.display = 'none'
            document.getElementById('cancelEtnias').style.display = 'initial'
            document.getElementById("accEtnias").value = "guardar"
        }

        function newFaunas() {
            cancelarFaunas()

            document.getElementById('saveFauna').removeAttribute('disabled')
            document.getElementById('newFauna').style.display = 'none'
            document.getElementById('cancelFauna').style.display = 'initial'
            document.getElementById("accFauna").value = "guardar"
        }

        function newFloras() {
            cancelarFloras()

            document.getElementById('saveFlora').removeAttribute('disabled')
            document.getElementById('newFlora').style.display = 'none'
            document.getElementById('cancelFlora').style.display = 'initial'
            document.getElementById("accFlora").value = "guardar"
        }

        function newFestividadades() {
            cancelarFestividad()

            document.getElementById('saveFestividad').removeAttribute('disabled')
            document.getElementById('newFestividad').style.display = 'none'
            document.getElementById('cancelFestividad').style.display = 'initial'
            document.getElementById("accFestividad").value = "guardar"
        }

        function newSitios() {
            cancelarSitios()

            document.getElementById('saveSitio').removeAttribute('disabled')
            document.getElementById('newSitio').style.display = 'none'
            document.getElementById('cancelSitio').style.display = 'initial'
            document.getElementById("accSitios").value = "guardar"
        }

        function newPersonajes() {
            cancelarPersonajes()

            document.getElementById('savePersonaje').removeAttribute('disabled')
            document.getElementById('newPersonaje').style.display = 'none'
            document.getElementById('cancelPersonaje').style.display = 'initial'
            document.getElementById("accPersonajes").value = "guardar"
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
                    } else if (idform == "Sitios") {
                        let tbody = document.querySelector('#tableSitios tbody');
                        tbody.innerHTML = ''; // Limpiar la tabla antes de llenarla
                        data.forEach(sitios => {
                            let tr = document.createElement('tr');
                            let tdNombre = document.createElement('td');
                            tdNombre.textContent = sitios.nombre;
                            tr.appendChild(tdNombre);

                            let tdAccion = document.createElement('td');
                            tdAccion.classList.add('table-action', 'min-w-100');
                            tdAccion.innerHTML =
                                `<a onclick="editSitios(${sitios.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                             <a onclick="deleteSitios(${sitios.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>`;
                            tr.appendChild(tdAccion);

                            tbody.appendChild(tr);
                        });
                    } else if (idform == "personajes") {
                        let tbody = document.querySelector('#tablePersonajes tbody');
                        tbody.innerHTML = ''; // Limpiar la tabla antes de llenarla
                        data.forEach(personaje => {
                            let tr = document.createElement('tr');
                            let tdNombre = document.createElement('td');
                            tdNombre.textContent = personaje.nombre;
                            tr.appendChild(tdNombre);

                            let tdAccion = document.createElement('td');
                            tdAccion.classList.add('table-action', 'min-w-100');
                            tdAccion.innerHTML =
                                `<a onclick="editPersonaje(${personaje.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                             <a onclick="deletePersonaje(${personaje.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>`;
                            tr.appendChild(tdAccion);

                            tbody.appendChild(tr);
                        });
                    } else if (idform == "fauna") {
                        let tbody = document.querySelector('#tableFauna tbody');
                        tbody.innerHTML = ''; // Limpiar la tabla antes de llenarla
                        data.forEach(personaje => {
                            let tr = document.createElement('tr');
                            let tdNombre = document.createElement('td');
                            tdNombre.textContent = personaje.nombre;
                            tr.appendChild(tdNombre);

                            let tdAccion = document.createElement('td');
                            tdAccion.classList.add('table-action', 'min-w-100');
                            tdAccion.innerHTML =
                                `<a onclick="editFauna(${personaje.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                             <a onclick="deleteFauna(${personaje.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>`;
                            tr.appendChild(tdAccion);

                            tbody.appendChild(tr);
                        });
                    } else if (idform == "flora") {
                        let tbody = document.querySelector('#tableFlora tbody');
                        tbody.innerHTML = ''; // Limpiar la tabla antes de llenarla
                        data.forEach(personaje => {
                            let tr = document.createElement('tr');
                            let tdNombre = document.createElement('td');
                            tdNombre.textContent = personaje.nombre;
                            tr.appendChild(tdNombre);

                            let tdAccion = document.createElement('td');
                            tdAccion.classList.add('table-action', 'min-w-100');
                            tdAccion.innerHTML =
                                `<a onclick="editFlora(${personaje.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="edit-2"></i></a>
                             <a onclick="deleteFlora(${personaje.id});" style="cursor: pointer;" class="text-fade hover-primary"><i class="align-middle" data-feather="trash"></i></a>`;
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

        function editSitios(idSitio) {
            document.getElementById("idSitios").value = idSitio

            var modal = new bootstrap.Modal(document.getElementById("modalSitiosInteres"), {
                backdrop: 'static',
                keyboard: false
            });

            modal.show();

            document.getElementById("accSitios").value = "editar"
            document.getElementById('saveSitio').removeAttribute('disabled')
            document.getElementById('newSitio').style.display = 'none'
            document.getElementById('cancelSitio').style.display = 'initial'

            let url = "{{ route('sitios.buscaSitios') }}";

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idSitio: idSitio
                    })
                })
                .then(response => response.json())
                .then(data => {
                    CKEDITOR.instances['contenidoSitiosInteres'].setData(data.contenido);
                    document.getElementById("nombreSitioInteres").value = data.nombre
                    if (data.destacada == 1) {
                        document.getElementById('sitioDestacado').checked = true;
                    } else {
                        document.getElementById('sitioDestacado').checked = false;
                    }
                })
                .catch(error => console.error('Error:', error));

        }

        function editFauna(idFauna) {
            document.getElementById("idFauna").value = idFauna

            var modal = new bootstrap.Modal(document.getElementById("modalFauna"), {
                backdrop: 'static',
                keyboard: false
            });

            modal.show();

            document.getElementById("accFauna").value = "editar"
            document.getElementById('saveFauna').removeAttribute('disabled')
            document.getElementById('newFauna').style.display = 'none'
            document.getElementById('cancelFauna').style.display = 'initial'

            let url = "{{ route('fauna.buscaFauna') }}";

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idFauna: idFauna
                    })
                })
                .then(response => response.json())
                .then(data => {
                    CKEDITOR.instances['contenidoFaunaList'].setData(data.contenido);
                    document.getElementById("nombreFauna").value = data.nombre
                    if (data.destacada == 1) {
                        document.getElementById('faunaDestacado').checked = true;
                    } else {
                        document.getElementById('faunaDestacado').checked = false;
                    }
                })
                .catch(error => console.error('Error:', error));

        }

        function editFlora(idFlora) {
            document.getElementById("idFlora").value = idFlora

            var modal = new bootstrap.Modal(document.getElementById("modalFlora"), {
                backdrop: 'static',
                keyboard: false
            });

            modal.show();

            document.getElementById("accFlora").value = "editar"
            document.getElementById('saveFlora').removeAttribute('disabled')
            document.getElementById('newFlora').style.display = 'none'
            document.getElementById('cancelFlora').style.display = 'initial'

            let url = "{{ route('flora.buscaFlora') }}";

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idFlora: idFlora
                    })
                })
                .then(response => response.json())
                .then(data => {
                    CKEDITOR.instances['contenidoFloraList'].setData(data.contenido);
                    document.getElementById("nombreFlora").value = data.nombre
                    if (data.destacada == 1) {
                        document.getElementById('floraDestacado').checked = true;
                    } else {
                        document.getElementById('floraDestacado').checked = false;
                    }
                })
                .catch(error => console.error('Error:', error));

        }

        function editPersonaje(idPersonaje) {
            document.getElementById("idPersonajes").value = idPersonaje

            var modal = new bootstrap.Modal(document.getElementById("modalPersonajesDestacados"), {
                backdrop: 'static',
                keyboard: false
            });

            modal.show();

            document.getElementById("accPersonajes").value = "editar"
            document.getElementById('savePersonaje').removeAttribute('disabled')
            document.getElementById('newPersonaje').style.display = 'none'
            document.getElementById('cancelPersonaje').style.display = 'initial'

            let url = "{{ route('personajes.buscaPersonaje') }}";

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idPersonaje: idPersonaje
                    })
                })
                .then(response => response.json())
                .then(data => {
                    CKEDITOR.instances['contenidoPersonajeDestacado'].setData(data.contenido);
                    document.getElementById("nombrePersonaje").value = data.nombre
                    if (data.destacada == 1) {
                        document.getElementById('personajeDestacado').checked = true;
                    } else {
                        document.getElementById('personajeDestacado').checked = false;
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
                                swal("Eliminar!", data.message, "success");
                                buscarLista('festividad', idDepartamento);
                            } else {
                                swal("Error!", data.message, "error");
                            }
                        })
                        .catch(error => console.error('Error:', error));

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }

        function deleteSitios(idSitio) {
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
                    let url = "{{ route('sitio.eliminarSitio') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idSitio: idSitio
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("Eliminar!", "El registro ha sido eliminado.", "success");
                                buscarLista('Sitios', idDepartamento);
                            }
                        })
                        .catch(error => console.error('Error:', error));

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }

        function deleteFauna(idFauna) {
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
                    let url = "{{ route('fauna.eliminarFauna') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idFauna: idFauna
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("Eliminar!", "El registro ha sido eliminado.", "success");
                                buscarLista('fauna', idDepartamento);
                            }
                        })
                        .catch(error => console.error('Error:', error));

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }

        function deleteFlora(idFlora) {
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
                    let url = "{{ route('flora.eliminarFlora') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idFlora: idFlora
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("Eliminar!", "El registro ha sido eliminado.", "success");
                                buscarLista('flora', idDepartamento);
                            }
                        })
                        .catch(error => console.error('Error:', error));

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }

        function deletePersonaje(idPersonaje) {
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
                    let url = "{{ route('personajes.eliminarPersonaje') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idPersonaje: idPersonaje
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("Eliminar!", "El registro ha sido eliminado.", "success");
                                buscarLista('personajes', idDepartamento);
                            }
                        })
                        .catch(error => console.error('Error:', error));

                } else {
                    swal("Cancelado", "Tu registro esta salvo :)", "error");
                }
            });
        }

        function cargarListaDepartamentos(page, searchTerm = '') {
            let url = "{{ route('departametos.listaDepartamentos') }}"; // Definir la URL

            // Eliminar los campos ocultos anteriores
            var oldPageInput = document.getElementById('page');
            var oldSearchTermInput = document.getElementById('searchTerm');
            if (oldPageInput) oldPageInput.remove();
            if (oldSearchTermInput) oldSearchTermInput.remove();

            var data = {
                page: page,
                search: searchTerm
            };

            // Limpiar la tabla antes de cargar nuevos datos


            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(responseData => {
                    // Rellenar la tabla con las filas generadas
                    document.getElementById('trRegistros').innerHTML = responseData.departamentos;
                    feather.replace();
                    // Colocar los enlaces de paginación
                    document.getElementById('pagination-links').innerHTML = responseData.links;
                    loadNow(0);
                })
                .catch(error => console.error('Error:', error));

        }

        async function editarDepartamento(idDepartamento) {
            document.getElementById("idDepartamento").value = idDepartamento;
            let listado = document.getElementById("listado");
            let formulario = document.getElementById("formulario");
            listado.style.display = "none";
            formulario.style.display = "block";

            loader.style.display = 'block';
            loadNow(1);

            $(".tab-wizard").find(".steps li").removeClass("disabled");

            try {
                // Espera a que cargarDepartamentos complete su ejecución
                await cargarDepartamentos();

                let url = "{{ route('departamento.buscaDepartamentos') }}";

                fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            idDepartamento: idDepartamento
                        })
                    })
                    .then(response => response.json())
                    .then(data => {

                        // Carga la descripción
                        console.log(data.descripcion.id);
                        document.getElementById("idDescripcion").value = data.descripcion.id;
                        $('#departamento').val(data.descripcion.departamento)
                            .trigger('change.select2')
                            .trigger('change');
                        document.getElementById("poblacion").value = data.descripcion.poblacion;
                        document.getElementById("temperatura").value = data.descripcion.temperatura;
                        document.getElementById("clima").value = data.descripcion.clima;
                        document.getElementById("extension").value = data.descripcion.extension;
                        CKEDITOR.instances['contenido'].setData(data.descripcion.contenido);
                        CKEDITOR.instances['contenidoGeografia'].setData(data.descripcion.geografia);
                        CKEDITOR.instances['contenidoActividadEconomica'].setData(data.descripcion
                            .actividad_economica);
                        CKEDITOR.instances['contenidoBandera'].setData(data.descripcion.bandera);
                        CKEDITOR.instances['contenidoEscudo'].setData(data.descripcion.escudo);

                        // Cargar historia
                        if (data.historia) {
                            document.getElementById("idHistoria").value = data.historia.id;
                            CKEDITOR.instances['contenidoHistoria'].setData(data.historia.historia);
                        }
                        //carga geografia
                        if (data.geografia) {
                            document.getElementById("idGeografia").value = data.geografia.id;
                            CKEDITOR.instances['contenidoUbicacion'].setData(data.geografia.ubicacion);
                            // CKEDITOR.instances['contenidoCoordenadas'].setData(data.geografia.coordenadas);
                            //CKEDITOR.instances['contenidoLimites'].setData(data.geografia.limites);
                            //CKEDITOR.instances['contenidoRelieve'].setData(data.geografia.relieve);
                        }
                        //carga hidrografica
                        if (data.hidrografia) {
                            document.getElementById("idHidrografia").value = data.hidrografia.id;
                            CKEDITOR.instances['contenidoHidrografia'].setData(data.hidrografia.hidrografia);
                        }

                        //carga clima
                        if (data.clima) {
                            document.getElementById("idClima").value = data.clima.id;
                            CKEDITOR.instances['contenidoClima'].setData(data.clima.clima);
                        }
                        //carga demografia
                        if (data.demografia) {
                            document.getElementById("idDemografia").value = data.demografia.id;
                            CKEDITOR.instances['contenidoPoblacion'].setData(data.demografia.poblacion);
                            CKEDITOR.instances['contenidoDensidad'].setData(data.demografia.densidad);
                            CKEDITOR.instances['contenidoSubregiones'].setData(data.demografia.subregiones);
                        }
                        //cargar etnografia
                        if (data.etnografia) {
                            document.getElementById("idEtnografia").value = data.etnografia.id;
                            CKEDITOR.instances['contenidoEtnoHistoria'].setData(data.etnografia.contenido);
                        }
                        buscarLista('etnografia', idDepartamento);

                        //cargar flora y fauna
                        if (data.faunaFlora) {
                            document.getElementById("idFauFlora").value = data.faunaFlora.id;
                            CKEDITOR.instances['contenidoFauna'].setData(data.faunaFlora.fauna);
                            CKEDITOR.instances['contenidoFlora'].setData(data.faunaFlora.flora);
                        }
                        buscarLista('fauna', idDepartamento);
                        buscarLista('flora', idDepartamento);
                        //cargar economia
                        if (data.economia) {
                            document.getElementById("idEconomia").value = data.economia.id;
                            CKEDITOR.instances['contenidoEconomia'].setData(data.economia.economia);
                        }
                        //cargar cultura
                        if (data.cultura) {
                            document.getElementById("idCultura").value = data.cultura.id;
                            CKEDITOR.instances['contenidoCultura'].setData(data.cultura.descripcion);
                            CKEDITOR.instances['contenidoArte'].setData(data.cultura.arte);
                            CKEDITOR.instances['contenidoDanza'].setData(data.cultura.danza);
                            CKEDITOR.instances['contenidoMusica'].setData(data.cultura.musica);
                        }
                        //cargar gastronomia
                        if (data.gastronomia) {
                            document.getElementById("idGastronomia").value = data.gastronomia.id;
                            CKEDITOR.instances['contenidoGastronomia'].setData(data.gastronomia.gastronomia);
                        }
                        //cargar festividades
                        buscarLista('festividad', idDepartamento);

                        //cargar Sitios de interes
                        buscarLista('Sitios', idDepartamento);

                        //cargar personajes destacados
                        buscarLista('personajes', idDepartamento);

                        //cargar capital
                        if (data.capital) {
                            document.getElementById("idCapital").value = data.capital.id;
                            CKEDITOR.instances['contenidoCapital'].setData(data.capital.capital);
                        }
                        //cargar referencia
                        if (data.referencia) {
                            document.getElementById("idReferencia").value = data.referencia.id;
                            CKEDITOR.instances['contenidoReferencia'].setData(data.referencia.referencia);
                            CKEDITOR.instances['contenidoWebgrafia'].setData(data.referencia.webgrafia);
                        }
                        loadNow(0);
                    })
                    .catch(error => console.error('Error:', error));
            } catch (error) {
                console.error('Error al cargar los departamentos:', error);
            }
        }

        function limpiarFormularios() {
            //limpiar Descripcion
            const descripcion = document.getElementById('descripcion')
            descripcion.reset()
            document.getElementById("idDescripcion").value = ''
            //limpiar Etnografia
            document.getElementById("idHistoria").value = ''
            //limpiar geografia
            document.getElementById("idGeografia").value = ''
            //limpiar hidrografia
            document.getElementById("idHidrografia").value = ''
            //limpiar clima
            document.getElementById("idClima").value = ''
            //limpiar demografia
            document.getElementById("idDemografia").value = ''
            //limpiar etnografia
            document.getElementById("idEtnografia").value = ''
            const tEtnias = document.querySelector('#tableEtnias tbody')
            tEtnias.innerHTML = '';
            //limpiar fauna y flora
            document.getElementById("idFauFlora").value = ''
            const tFauna = document.querySelector('#tableFauna tbody')
            tFauna.innerHTML = ''
            const tFlora = document.querySelector('#tableFlora tbody')
            tFlora.innerHTML = ''
            //limpiar economia
            document.getElementById("idEconomia").value = ''
            //limpiar cultura
            document.getElementById("idCultura").value = ''
            //limpiar gastronomia
            document.getElementById("idGastronomia").value = ''
            //limpiar festividades
            const tFestividad = document.querySelector('#tableFestividad tbody')
            tFestividad.innerHTML = ''
            //limpiar sitios de interes
            const tSitios = document.querySelector('#tableSitios tbody')
            tSitios.innerHTML = ''
            //limpiar personajes destacados
            const tPersoanajes = document.querySelector('#tablePersonajes tbody')
            tPersoanajes.innerHTML = ''
            //limpiar capital 
            document.getElementById("idCapital").value = ''
            //limpiar referencia 
            document.getElementById("idReferencia").value = ''

            // Limpia los editores CKEditor
            for (let instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].setData(''); // Establece el contenido vacío
            }
        }

        async function pregDepartamento(idDepartamento) {
            document.getElementById("idDepartamento").value = idDepartamento;
            let listado = document.getElementById("listado");
            let preguntas = document.getElementById("listadoPreguntas");
            listado.style.display = "none";
            preguntas.style.display = "block";
            await cargarPreguntasDepartamento();
        }

        async function cargarPreguntasDepartamento(page) {
            let url = "{{ route('departametos.VisualizacionPreguntasDepartamento') }}"; // Definir la URL
            let idDepartamento = document.getElementById("idDepartamento").value
            loader = document.getElementById('loader');
            loadNow(1);
            document.getElementById('regPreguntas').innerHTML = ''

            var data = {
                page: page,
                departamento: idDepartamento
            };

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify(data)
                });

                const responseData = await response.json();

                // Rellenar la tabla con las filas generadas
                document.getElementById('regPreguntas').innerHTML = responseData.preguntas;
                feather.replace();

                // Colocar los enlaces de paginación
                document.getElementById('pagination-linksPreg').innerHTML = responseData.links;
                loadNow(0);
            } catch (error) {
                console.error('Error:', error);
            }

        }

        function agregarPregunta() {
            var modal = new bootstrap.Modal(document.getElementById("modalPreguntas"), {
                backdrop: 'static',
                keyboard: false
            });
            modal.show();
            cancelarPregunta()

            addOpcion();
        }

        function atrasPregunta() {
            let listado = document.getElementById("listado");
            let preguntas = document.getElementById("listadoPreguntas");
            listado.style.display = "block";
            preguntas.style.display = "none";
        }

        function cambioPregunta(value) {
            if (value == "multiple") {
                document.getElementById("multiple").style.display = "block";
                document.getElementById("verfal").style.display = "none";
            } else if (value == "verfal") {
                document.getElementById("multiple").style.display = "none";
                document.getElementById("verfal").style.display = "block";
            } else {
                document.getElementById("multiple").style.display = "none";
                document.getElementById("verfal").style.display = "none";
            }
        }

        let consOpcion = 0;

        function addOpcion() {
            const listItem = document.createElement('div')

            let opciones = document.getElementById("opcionesPreg");

            listItem.innerHTML = `<div id="divOpcion-${consOpcion}" class="input-group mb-1">
                                <span class="input-group-addon">
                                  <input type="checkbox" name="checkOpcionesPreg[]" value="${consOpcion}" id="addon_Checkbox_${consOpcion}"  onclick="checkOnlyThis(this)">
                                  <label for="addon_Checkbox_${consOpcion}"
                                  style="padding-left: 20px;height: 17px;"></label>
                                </span>
                                <input type="text" name="textOpcionesPreg[]" class="form-control">
                                <span class="input-group-addon">
                                  <a href="javascript:deleteOpcion(${consOpcion})" class="text-danger"
                                  data-bs-toggle="tooltip" data-bs-original-title="Eliminar"><i
                                  class="ti-trash" aria-hidden="true"></i></a>
                                </span>
                            </div>`

            opciones.appendChild(listItem);
            consOpcion++;

        }

        function checkOnlyThis(checkbox) {
            const checkboxes = document.getElementsByName('checkOpcionesPreg[]');
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false;
            });
        }

        function checkOnlyThisVerFal(checkbox) {
            const checkboxes = document.getElementsByName('checkVerFal[]');
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false;
            });
        }


        function deleteOpcion(id) {
            let opcion = document.getElementById(`divOpcion-${id}`);
            opcion.remove();
        }


        function guardarPregunta() {

            const tipPreg = document.getElementById("tipoPreg");

            if (tipPreg.value == 'multiple') {
                let pregunta = document.getElementById('contPregunta').value.trim();
                if (!pregunta) {
                    swal("¡Alerta!",
                        "Por favor, ingrese la pregunta.",
                        "warning");

                    return;
                }


                // Validar que se ingresen al menos 2 opciones y que no estén vacías
                let opciones = document.getElementsByName('textOpcionesPreg[]');
                let opcionesValidas = 0;

                opciones.forEach(function(opcion) {
                    if (opcion.value.trim() === '') {
                        opcionesValidas++;
                    }
                });

                if (opcionesValidas > 0) {
                    swal("¡Alerta!",
                        "Debes de ingresar todas las opciones.",
                        "warning");
                    return;
                }

                let checkboxes = document.getElementsByName('checkOpcionesPreg[]');
                let seleccionada = false;


                checkboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        seleccionada = true;
                    }
                });

                if (!seleccionada) {
                    swal("¡Alerta!",
                        "Por favor, seleccione una opción como correcta.",
                        "warning");
                    return;
                }
            } else if (tipPreg.value == 'verfal') {

                let pregunta = document.getElementById('preguntaVerfal').value.trim();
                if (!pregunta) {
                    swal("¡Alerta!",
                        "Por favor, ingrese la pregunta.",
                        "warning");

                    return;
                }

                let checkboxes = document.getElementsByName('checkVerFal[]');
                let seleccionada = false;


                checkboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        seleccionada = true;
                    }
                });

                if (!seleccionada) {
                    swal("¡Alerta!",
                        "Por favor, seleccione si es verdadera o falsa.",
                        "warning");
                    return;
                }

            } else {
                swal("¡Alerta!",
                    "Por favor, seleccione uyn tipo de pregunta.",
                    "warning");
                return;
            }


            const formSitios = document.getElementById('formPregunta');
            const formData = new FormData(formSitios);

            // Agrega un identificador único al formulario
            let idDepartamento = document.getElementById('idDepartamento').value;
            formData.append('idDepartamento', idDepartamento);

            // Define la URL del backend
            const url = "{{ route('form.guardarPregunta') }}";

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
                        document.getElementById('savePregunta').setAttribute('disabled', 'disabled')
                        document.getElementById('newPregunta').style.display = 'initial';
                        document.getElementById('cancelPregunta').style.display = 'none';


                        document.getElementById("accPregunta").value = "guardar"
                        cargarPreguntasDepartamento();
                    } else {
                        console.error('Error en el procesamiento:', data.message);
                    }
                })
                .catch(error => {
                    console.error("Error al enviar los datos:", error);
                });


        }
    </script>

@endsection
