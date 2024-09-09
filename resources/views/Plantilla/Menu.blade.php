<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 97%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li id="principal">
                        <a href="{{ url('/Administracion') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>Inicio</span>

                        </a>
                    </li>
                    <li id="principalDepartamento" class="treeview">
                        <a href="#">
                            <i data-feather="grid"></i>
                            <span>Departamentos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                            <li id="principalDepartamentoGestionar"> 
                                <a href="{{ url('/AdminDepartamento/Gestionar') }}">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Gestionar
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Otras opciones
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Otras opciones
                                </a>
                            </li>
                    </li>
                </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i data-feather="settings"></i>
                        <span>Parametros</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Config 1</a></li>
                        <li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Config 2</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i data-feather="users"></i>
                        <span>Usuarios</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="icon-Commit"><span class="path1"></span><span
                                        class="path2"></span></i>Gestionar
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>

                <div class="sidebar-widgets">
                    <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                        <div class="text-center">
                            <img src="{{ asset('app-assets/images/svg-icon/color-svg/custom-32.svg') }}"
                                class="sideimg p-5" alt="">
                            {{-- <h4 class="title-bx text-primary"></h4> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>
