<!DOCTYPE html>
<html lang="en">

@include('Plantilla.Head')

<body class="layout-top-nav light-skin theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>
        @include('Plantilla.Cabecera')
        @include('Plantilla.Menu')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                @yield('Contenido')
                </section>
                <!-- /.content -->
            </div>
        </div>

        @include('Plantilla.Footer')
        @yield('scripts')
    </div>
</body>
</html>
