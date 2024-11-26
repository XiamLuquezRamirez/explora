@extends('Plantilla.Principal')
@section('title', 'Tablero Inicial')
@section('Contenido')
    <section class="content">
        <div class="row" id="listDepartamentos">
            <div class="col-xl-9 col-12">
                <div class="card bg-primary-light">
                    <div class="card-header">
                        <h4 class="card-title">Departamentos</h4>
                    </div>
                </div>
                <div class="row" id="regDepartamentos">

                </div>
                <div id="pagination-links" class="text-center ml-1 mt-2">

                </div>
            </div>
            <div class="col-xl-3 col-12">
                <div class="box bg-transparent no-shadow">
                    <div class="box-header ps-0 pb-0">
                        <h3 class="box-title no-border">
                            Subregiones
                        </h3>
                    </div>
                </div>
                <div class="box">
                    <div class="box-body">

                        <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                            <div class="" style="width: 50px;    margin-right: 13px;">
                                <img src="{{ asset('app-assets/images/logo/logo-1.jpg') }}" class="avatar b-1"
                                    alt="" />
                            </div>
                            <div class="text-overflow" style="margin-left: 5px;">
                                <a href="#">
                                    <p class="mb-0 fw-500 text-overflow">Prudential FMCG Fund - Growth</p>
                                    <p class="mb-0 fw-500">$500</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                            <div class="me-10" style="width: 50px;">
                                <img src="{{ asset('app-assets/images/logo/logo-2.jpg') }}" class="avatar b-1"
                                    alt="" />
                            </div>
                            <div class="text-overflow" style="margin-left: 5px;">
                                <a href="#">
                                    <p class="mb-0 fw-500 text-overflow">Market Fund Direct-Growth</p>
                                    <p class="mb-0 fw-500">$500</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                            <div class="me-10 modal-1">
                                <img src="{{ asset('app-assets/images/logo/logo-3.jpg') }}" class="avatar b-1"
                                    alt="" />
                            </div>
                            <div class="text-overflow overflow_box">
                                <a href="#">
                                    <p class="mb-0 fw-500 text-overflow">ABCD Money Market Fund Direct Plan-Growth</p>
                                    <p class="mb-0 fw-500">$500</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                            <div class="me-10 modal-1 ">
                                <img src="{{ asset('app-assets/images/logo/logo-4.jpg') }}" class="avatar b-1"
                                    alt="" />
                            </div>
                            <div class="text-overflow overflow_box">
                                <a href="#">
                                    <p class="mb-0 fw-500 text-overflow">A&D Money Market Fund Direct-Growth</p>
                                    <p class="mb-0 fw-500">$500</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-10" style="width: 50px;">
                                <img src="{{ asset('app-assets/images/logo/logo-5.jpg') }}" class="avatar b-1"
                                    alt="" />
                            </div>
                            <div class="text-overflow" style="margin-left: 5px;">
                                <a href="#">
                                    <p class="mb-0 fw-500 text-overflow">Index Sensex Direct</p>
                                    <p class="mb-0 fw-500">$500</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box bg-transparent no-shadow">
                    <div class="box-header ps-0 pb-0">
                        <h3 class="box-title no-border">
                            Parques naturales
                        </h3>
                    </div>
                </div>
                <div class="box">
                    <div class="box-body funds_1">
                        <div class="fund-scorll">
                            <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10" style="width: 50px;">
                                    <img src="{{ asset('app-assets/images/logo/logo-1.jpg') }}" class="avatar b-1"
                                        alt="" />
                                </div>
                                <div>
                                    <a href="#">
                                        <p class="mb-0 fw-500">Prudential FMCG Fund - Growth</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10" style="width: 50px;">
                                    <img src="{{ asset('app-assets/images/logo/logo-2.jpg') }}" class="avatar b-1"
                                        alt="" />
                                </div>
                                <div>
                                    <a href="#">
                                        <p class="mb-0 fw-500">Market Fund Direct-Growth</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10 modal-1">
                                    <img src="{{ asset('app-assets/images/logo/logo-3.jpg') }}" class="avatar b-1"
                                        alt="" />
                                </div>
                                <div>
                                    <a href="#">
                                        <p class="mb-0 fw-500 overflow_box_1">ABCD Money Market Fund Direct Plan-Growth</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10 modal-1">
                                    <img src="{{ asset('app-assets/images/logo/logo-4.jpg') }}" class="avatar b-1"
                                        alt="" />
                                </div>
                                <div>
                                    <a href="#">
                                        <p class="mb-0 fw-500 overflow_box_1">A&D Money Market Fund Direct-Growth</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10" style="width: 50px;">
                                    <img src="{{ asset('app-assets/images/logo/logo-1.jpg') }}" class="avatar b-1"
                                        alt="" />
                                </div>
                                <div>
                                    <a href="#">
                                        <p class="mb-0 fw-500">Prudential FMCG Fund - Growth</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10" style="width: 50px;">
                                    <img src="{{ asset('app-assets/images/logo/logo-2.jpg') }}" class="avatar b-1"
                                        alt="" />
                                </div>
                                <div>
                                    <a href="#">
                                        <p class="mb-0 fw-500">Market Fund Direct-Growth</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-10" style="width: 50px;">
                                    <img src="{{ asset('app-assets/images/logo/logo-5.jpg') }}" class="avatar b-1"
                                        alt="" />
                                </div>
                                <div>
                                    <a href="#">
                                        <p class="mb-0 fw-500">Index Sensex Direct</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="display: none;" id="detDepartamento">
            <div class="card bg-primary-light">
                <div class="card-header">
                    <h4 class="card-title" id="nombreDepartamento">Departamento de Casanares</h4>
                    <a onclick="mostarDepartamentos();" class="btn btn-primary"><i
                            class="fa fa-mail-reply-all me-10"></i> Atras</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-12">
                    <div class="box">
                        <div class="box-body">
                            <ul class="nav nav-pills file-nav d-block">
                                <li class="nav-item">
                                    <a class="nav-link active rounded nav-linkMenu" style="cursor: pointer;"
                                        id="liDescripcion" onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-fw fa-list-alt"></i>
                                        <span class="fs-18 mt-2">Descripción</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liHistoria"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa fa-hourglass-start"></i>
                                        <span class="fs-18 mt-2">Historia</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liGeografia"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-globe"></i>
                                        <span class="fs-18 mt-2">Geografía</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liHidrografia"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-tint"></i>
                                        <span class="fs-18 mt-2">Hidrografía</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liClima"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-thermometer-half"></i>
                                        <span class="fs-18 mt-2">Clima</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liDemografia"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-group"></i>
                                        <span class="fs-18 mt-2">Demografía</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liEtnografia"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-gg"></i>
                                        <span class="fs-18 mt-2">Etnografía</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liFaunaFlora"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-leaf"></i>
                                        <span class="fs-18 mt-2">Fauna y flora</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liEconomia"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-dollar"></i>
                                        <span class="fs-18 mt-2">Economía</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liCultura"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-pied-piper-alt"></i>
                                        <span class="fs-18 mt-2">Cultura</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liGastronomia"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-cutlery"></i>
                                        <span class="fs-18 mt-2">Gastronomia</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liFestividades"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-music"></i>
                                        <span class="fs-18 mt-2">Festividades</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;"
                                        id="liSitiosInteres" onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-thumb-tack"></i>
                                        <span class="fs-18 mt-2">Sitios de interés</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liPersonajes"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-user-circle-o"></i>
                                        <span class="fs-18 mt-2">Personajes</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link rounded nav-linkMenu" style="cursor: pointer;" id="liCapital"
                                        onclick="habilitarVista(this);">
                                        <i class="fs-18 me-10 fa fa-map-signs"></i>
                                        <span class="fs-18 mt-2">Capital</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-12">

                    <div class="card vista" id="Descripcion">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Descripción</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-start mt-3">
                                <div id="contenidoDepartameto"></div>
                                <p class="text-muted mb-2 "><strong class="text-dark">Capital :</strong> <span
                                        class="ms-2" id="descCapital"></span></p>
                                <p class="text-muted mb-2 "><strong class="text-dark">Población :</strong><span
                                        class="ms-2" id="descPoblacion"></span></p>
                                <p class="text-muted mb-2 "><strong class="text-dark">Clima :</strong> <span
                                        class="ms-2 " id="descClima"></span></p>
                                <p class="text-muted mb-1 "><strong class="text-dark">Temperatura :</strong> <span
                                        class="ms-2" id="descTemperatura"></span></p>
                                <p class="text-muted mb-1 "><strong class="text-dark">Extensión :</strong> <span
                                        class="ms-2" id="descExtension"></span></p>
                            </div>
                            <div class="tab-content">
                                <ul class="nav nav-pills bg-nav-pills nav-justified mt-3 mb-3">
                                    <li class="nav-item">
                                        <a href="#divBadera" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0 active" id="aBadera">

                                            <span class="d-none d-md-block">Bandera</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#divEscudo" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link rounded-0" id="aEscudo">

                                            <span class="d-none d-md-block">Escudo</span>
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content px-20">
                                    <div class="tab-pane  show active" id="divBadera">
                                        <div id="bandera"></div>
                                    </div>
                                    <div class="tab-pane" id="divEscudo">
                                        <div id="escudo"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card vista" id="Historia">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Historia</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="desHistoria">

                            </div>
                        </div>
                    </div>
                    <div class="card vista" id="Geografia">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Geografía</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="contUbi">
                                {{-- <h5 class="card-title fw-600">.</h5> --}}
                                <div id="desUbicacion"></div>
                            </div>
                            <div style="display: none;" id="contCoord">
                                <h5 class="card-title fw-600">Coordenadas.</h5>
                                <div id="desCoordenadas"></div>
                            </div>
                            <div style="display: none;" id="contLimi">
                                <h5 class="card-title fw-600">Limites.</h5>
                                <div id="desLimites"></div>
                            </div>
                            <div style="display: none;" id="contReli">
                                <h5 class="card-title fw-600">Relieve.</h5>
                                <div id="desRelieve"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card vista" id="Hidrografia">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Hidrografía</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="desHidrografia"></div>
                        </div>
                    </div>
                    <div class="card vista" id="Clima">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Clima</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="desClima"></div>
                        </div>
                    </div>
                    <div class="card vista" id="Demografia">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Demografía</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="desPoblacion"></div>
                        </div>
                    </div>
                    <div class="card vista" id="Etnografia">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Etnografía</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="desEtnografia"></div>
                            <div class="tab-pane show active" id="justified-tabs-preview">
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" id="navEtnias">


                                </ul>

                                <div class="tab-content px-20" id="contNavEtnias">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card vista" id="FaunaFlora">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Fauna y Flora</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-600">Fauna.</h5>
                            <div id="desFauna">

                            </div>
                            <div id="tabFauna">
                                <div class="tab-pane show active" id="justified-tabs-preview">
                                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" id="navFauna">

                                    </ul>
                                    <div class="tab-content px-20" id="contNavFauna">

                                    </div>
                                </div>
                            </div>
                            <hr class="m-4">
                            <h5 class="card-title fw-600">Flora.</h5>
                            <div id="desFlora">
                            </div>
                            <div id="tabFlora">
                                <div class="tab-pane show active" id="justified-tabs-preview">
                                    <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" id="navFlora">

                                    </ul>
                                    <div class="tab-content px-20" id="contNavFlora">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card vista" id="Economia">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Economía</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="desEconomia"></div>
                        </div>
                    </div>
                    <div class="card vista" id="Cultura">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Cultura</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="contCultura">
                                <h5 class="card-title fw-600">Descripción.</h5>
                                <div id="desCultura"></div>
                            </div>
                            <div id="contArte" style="display: none;">
                                <h5 class="card-title fw-600">Arte.</h5>
                                <div id="desArte"></div>
                            </div>
                            <div id="contDanza" style="display: none;">
                                <h5 class="card-title fw-600">Danza.</h5>
                                <div id="desDanza"></div>
                            </div>
                            <div id="contMusica" style="display: none;">
                                <h5 class="card-title fw-600">Música.</h5>
                                <div id="desMusica"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card vista" id="Gastronomia">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Gastronomia</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="desGastronomia"></div>
                        </div>
                    </div>
                    <div class="card vista" id="Festividades">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Festividades</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-pane show active" id="justified-tabs-preview">
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" id="navFestividad">


                                </ul>

                                <div class="tab-content px-20" id="contNavFestividad">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card vista" id="SitiosInteres">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Sitios de interés</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-pane show active" id="justified-tabs-preview">
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" id="navSitios">
                                </ul>
                                <div class="tab-content px-20" id="contNavSitios">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card vista" id="Personajes">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Personajes</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-pane show active" id="justified-tabs-preview">
                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" id="navPersonajes">
                                </ul>
                                <div class="tab-content px-20" id="contNavPersonajes">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card vista" id="Capital">
                        <div class="card bg-primary-light">
                            <div class="card-header">
                                <h4 class="card-title">Capital</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="desCapital"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", async function() {

            let menuP = document.getElementById("principal");
            menuP.classList.add("active");

            await cargarListaDepartamentos(1);

            // Evento click para la paginación
            document.addEventListener('click', async function(event) {
                if (event.target.matches('.pagination a')) {
                    event.preventDefault();
                    var href = event.target.getAttribute('href');
                    var page = href.split('page=')[1];

                    // Asegurarse de que 'page' sea un número antes de hacer la solicitud
                    if (!isNaN(page)) {
                        await cargarListaDepartamentos(page);
                    }
                }
            });


            // Evento input para el campo de búsqueda
            document.getElementById('busquedaGen').addEventListener('input', async function() {
                var searchTerm = this.value;
                await cargarListaDepartamentos(1,
                    searchTerm); // Cargar la primera página con el término de búsqueda
            });

            agregarClase();
        });

        function agregarClase() {
            const divs = document.querySelectorAll('.bounce');

            divs.forEach(div => {
                div.addEventListener('mouseover', () => {
                    div.classList.add('box-outline-primary');
                });

                div.addEventListener('mouseout', () => {
                    div.classList.remove('box-outline-primary');
                });
            });
        }

        async function cargarListaDepartamentos(page, searchTerm = '') {
            let url = "{{ route('departametos.VisualizacionDepartamentos') }}"; // Definir la URL

            loader = document.getElementById('loader');
            loadNow(1);

            // Eliminar los campos ocultos anteriores
            var oldPageInput = document.getElementById('page');
            var oldSearchTermInput = document.getElementById('searchTerm');
            if (oldPageInput) oldPageInput.remove();
            if (oldSearchTermInput) oldSearchTermInput.remove();

            var data = {
                page: page,
                search: searchTerm
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
                document.getElementById('regDepartamentos').innerHTML = responseData.departamentos;
                feather.replace();

                // Colocar los enlaces de paginación
                document.getElementById('pagination-links').innerHTML = responseData.links;
                loadNow(0);
            } catch (error) {
                console.error('Error:', error);
            }
        }



        function habilitarVista(element) {
            const navLinks = document.querySelectorAll('.nav-linkMenu');
            navLinks.forEach(nav => nav.classList.remove('active', 'rounded'));
            element.classList.add('active', 'rounded');

            const idElement = element.getAttribute('id');
            const vistas = document.querySelectorAll('.vista');
            vistas.forEach(vista => {
                vista.style.display = 'none';
            });

            document.getElementById(idElement.slice(2)).style.display = 'block';

        }

        function mostarDepartamentos() {
            document.getElementById("listDepartamentos").style.display = '';
            document.getElementById("divBusquedaGen").style.display = '';
            document.getElementById("detDepartamento").style.display = 'none';
        }

        function mostrarInformacionDepartamento(idDepartamento) {

            document.getElementById("listDepartamentos").style.display = 'none';
            document.getElementById("divBusquedaGen").style.display = 'none';
            document.getElementById("detDepartamento").style.display = 'block';


            const vistas = document.querySelectorAll('.vista');
            vistas.forEach(vista => {
                vista.style.display = 'none';
            });

            document.getElementById("Descripcion").style.display = 'block';
            loader.style.display = 'block';
            loadNow(1);

            try {
                // Espera a que cargarDepartamentos complete su ejecución

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

                        document.getElementById('nombreDepartamento').innerHTML =
                            `Departamento de ${data.nombreDepartamento.nombre}`
                        document.getElementById('descCapital').innerHTML = data.nombreDepartamento.capital
                        document.getElementById('contenidoDepartameto').innerHTML = data.descripcion.contenido
                        document.getElementById('descPoblacion').innerHTML = data.descripcion.poblacion
                        document.getElementById('descClima').innerHTML = data.descripcion.clima
                        document.getElementById('descTemperatura').innerHTML = data.descripcion.temperatura
                        document.getElementById('descExtension').innerHTML = data.descripcion.extension

                        document.getElementById('bandera').innerHTML = data.descripcion.bandera
                        document.getElementById('escudo').innerHTML = data.descripcion.escudo

                        // Cargar historia
                        document.getElementById('desHistoria').innerHTML = data.historia.historia

                        //carga geografia
                        if (data.geografia.ubicacion) {
                            document.getElementById('desUbicacion').innerHTML = data.geografia.ubicacion
                            document.getElementById('contUbi').style.display = 'block'
                        } else {
                            document.getElementById('contUbi').style.display = 'none'
                        }

                        if (data.geografia.coordenadas) {
                            document.getElementById('desCoordenadas').innerHTML = data.geografia.coordenadas
                            document.getElementById('contCoord').style.display = 'block'
                        } else {
                            document.getElementById('contCoord').style.display = 'none'
                        }
                        if (data.geografia.limites) {
                            document.getElementById('desLimites').innerHTML = data.geografia.limites
                            document.getElementById('contLimi').style.display = 'block'
                        } else {
                            document.getElementById('contLimi').style.display = 'none'
                        }

                        if (data.geografia.relieve) {
                            document.getElementById('desRelieve').innerHTML = data.geografia.relieve
                            document.getElementById('contReli').style.display = 'block'
                        } else {
                            document.getElementById('contReli').style.display = 'none'
                        }

                        //carga hidrografica
                        document.getElementById('desHidrografia').innerHTML = data.hidrografia.hidrografia


                        //carga clima
                        document.getElementById('desClima').innerHTML = data.clima.clima

                        //carga demografia
                          console.log(data.demografia.poblacion)
                        if (data.demografia.poblacion) {
                            document.getElementById('desPoblacion').innerHTML = data.demografia.poblacion
                        }
                    

                        //cargar etnografia
                        document.getElementById('desEtnografia').innerHTML = data.etnografia.contenido

                        buscarLista('etnografia', idDepartamento);

                        //cargar flora y fauna
                        document.getElementById('desFauna').innerHTML = data.faunaFlora.fauna
                        buscarLista('flora', idDepartamento);

                        document.getElementById('desFlora').innerHTML = data.faunaFlora.flora
                        buscarLista('fauna', idDepartamento);
                        //cargar economia
                        document.getElementById('desEconomia').innerHTML = data.economia.economia

                        //cargar cultura

                        if (data.cultura.descripcion) {
                            document.getElementById('desCultura').innerHTML = data.cultura.descripcion
                            document.getElementById('contCultura').style.display = 'block'
                        } else {
                            document.getElementById('contCultura').style.display = 'none'
                        }

                        if (data.cultura.arte) {
                            document.getElementById('desArte').innerHTML = data.cultura.arte
                            document.getElementById('contArte').style.display = 'block'
                        } else {
                            document.getElementById('contArte').style.display = 'none'
                        }

                        if (data.cultura.danza) {
                            document.getElementById('desDanza').innerHTML = data.cultura.danza
                            document.getElementById('contDanza').style.display = 'block'
                        } else {
                            document.getElementById('contDanza').style.display = 'none'
                        }

                        if (data.cultura.musica) {
                            document.getElementById('desMusica').innerHTML = data.cultura.musica
                            document.getElementById('contMusica').style.display = 'block'
                        } else {
                            document.getElementById('contMusica').style.display = 'none'
                        }

                        //cargar gastronomia
                        document.getElementById('desGastronomia').innerHTML = data.gastronomia.gastronomia

                        //cargar festividades
                        buscarLista('festividad', idDepartamento);

                        //cargar Sitios de interes
                        buscarLista('Sitios', idDepartamento);

                        //cargar personajes destacados
                        buscarLista('personajes', idDepartamento);

                        //cargar capital
                        document.getElementById('desCapital').innerHTML = data.capital.capital

                        // //cargar referencia
                        // document.getElementById("idReferencia").value = data.referencia.id;
                        // CKEDITOR.instances['contenidoReferencia'].setData(data.referencia.referencia);
                        // CKEDITOR.instances['contenidoWebgrafia'].setData(data.referencia.webgrafia);
                        loadNow(0);

                    })
                    .catch(error => console.error('Error:', error));
            } catch (error) {
                console.error('Error al cargar los departamentos:', error);
            }

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
                        let navEtnias = '';
                        let active = "active";
                        data.forEach(etnia => {
                            navEtnias += `<li class="nav-item">
                                        <a href="#etnia${etnia.id}" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0 ${active}">
                                            <span class="d-none d-md-block">${etnia.nombre}</span>
                                        </a>
                                    </li>`;
                            active = "";
                        });

                        active = "active";
                        let contNavEtnias = '';
                        data.forEach(etnia => {
                            contNavEtnias += `<div class="tab-pane ${active}" id="etnia${etnia.id}">
                                     ${etnia.contenido}
                                    </div>`;
                            active = "";
                        });

                        document.getElementById('navEtnias').innerHTML = navEtnias;
                        document.getElementById('contNavEtnias').innerHTML = contNavEtnias;


                    } else if (idform == "festividad") {

                        let navFestividad = '';
                        let active = "active";
                        data.forEach(festi => {
                            navFestividad += `<li class="nav-item">
                                        <a href="#festi${festi.id}" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0 ${active}">
                                            <span class="d-none d-md-block">${festi.nombre}</span>
                                        </a>
                                    </li>`;
                            active = "";
                        });

                        active = "active";
                        let contNavFestividad = '';
                        data.forEach(festi => {
                            contNavFestividad += `<div class="tab-pane ${active}" id="festi${festi.id}">
                                     ${festi.contenido}
                                    </div>`;
                            active = "";
                        });

                        document.getElementById('navFestividad').innerHTML = navFestividad;
                        document.getElementById('contNavFestividad').innerHTML = contNavFestividad;

                    } else if (idform == "Sitios") {
                        let navSitios = '';
                        let active = "active";
                        data.forEach(sitios => {
                            navSitios += `<li class="nav-item">
                                        <a href="#sitios${sitios.id}" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0 ${active}">
                                            <span class="d-none d-md-block">${sitios.nombre}</span>
                                        </a>
                                    </li>`;
                            active = "";
                        });

                        active = "active";
                        let contNavSitios = '';
                        data.forEach(sitios => {
                            contNavSitios += `<div class="tab-pane ${active}" id="sitios${sitios.id}">
                                     ${sitios.contenido}
                                    </div>`;
                            active = "";
                        });

                        document.getElementById('navSitios').innerHTML = navSitios;
                        document.getElementById('contNavSitios').innerHTML = contNavSitios;


                    } else if (idform == "personajes") {
                        let navPersonajes = '';
                        let active = "active";
                        data.forEach(perso => {
                            navPersonajes += `<li class="nav-item">
                                        <a href="#perso${perso.id}" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0 ${active}">
                                            <span class="d-none d-md-block">${perso.nombre}</span>
                                        </a>
                                    </li>`;
                            active = "";
                        });

                        active = "active";
                        let contNavPersonajes = '';
                        data.forEach(perso => {
                            contNavPersonajes += `<div class="tab-pane ${active}" id="perso${perso.id}">
                                     ${perso.contenido}
                                    </div>`;
                            active = "";
                        });

                        document.getElementById('navPersonajes').innerHTML = navPersonajes;
                        document.getElementById('contNavPersonajes').innerHTML = contNavPersonajes;

                    } else if (idform == "fauna") {
                        let navFauna = '';
                        let active = "active";
                        data.forEach(fauna => {
                            navFauna += `<li class="nav-item">
                                        <a href="#fauna${fauna.id}" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0 ${active}">
                                            <span class="d-none d-md-block">${fauna.nombre}</span>
                                        </a>
                                    </li>`;
                            active = "";
                        });

                        active = "active";
                        let contNavFauna = '';
                        data.forEach(fauna => {
                            contNavFauna += `<div class="tab-pane ${active}" id="fauna${fauna.id}">
                                     ${fauna.contenido}
                                    </div>`;
                            active = "";
                        });

                        document.getElementById('navFauna').innerHTML = navFauna;
                        document.getElementById('contNavFauna').innerHTML = contNavFauna;
                    } else if (idform == "flora") {
                        let navFlora = '';
                        let active = "active";
                        data.forEach(flora => {
                            navFlora += `<li class="nav-item">
                                        <a href="#flora${flora.id}" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link rounded-0 ${active}">
                                            <span class="d-none d-md-block">${flora.nombre}</span>
                                        </a>
                                    </li>`;
                            active = "";
                        });

                        active = "active";
                        let contNavFlora = '';
                        data.forEach(flora => {
                            contNavFlora += `<div class="tab-pane ${active}" id="flora${flora.id}">
                                     ${flora.contenido}
                                    </div>`;
                            active = "";
                        });

                        document.getElementById('navFlora').innerHTML = navFlora;
                        document.getElementById('contNavFlora').innerHTML = contNavFlora;

                    }
                    // Recargar los íconos de feather
                    feather.replace();
                })
                .catch(error => console.error('Error:', error));

        }
    </script>

@endsection
