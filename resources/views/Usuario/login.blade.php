<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link rel="icon" href="../../../images/favicon.ico"> --}}

    <title>Explora - Inicio de sesión </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('app-assets/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('app-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/skin_color.css') }}">

</head>

<body class="hold-transition theme-primary bg-img"
    style="background-image: url({{ asset('app-assets/images/auth-bg/bg-16.jpg') }})">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary fw-600">Explora</h2>
                                <p class="mb-0 text-fade">Inicia sesión para continuar en Explora.</p>
                            </div>
                            <div class="p-40">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>

                                                <h4><i class="icon fa fa-check"></i> Alerta!</h4>
                                                {!! session('error') !!}
                                            </div>
                                        @endif
                                        @if (Session::has('success'))
                                            <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                                <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                                                {!! session('success') !!}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <form action="{{ url('/Login') }}" method="POST" novalidate>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i
                                                    class="text-fade ti-user"></i></span>
                                            <input type="text" id="usuario" name="usuario"
                                                class="form-control ps-15 bg-transparent" placeholder="Usuario">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i
                                                    class="text-fade ti-lock"></i></span>
                                            <input type="password" name="pasword" id="pasword"
                                                class="form-control ps-15 bg-transparent" autocomplete="off"
                                                placeholder="Contraseña">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <!-- /.col -->
                                        <div class=".col-md-offset-8">
                                            <div class="fog-pwd text-end">
                                                <a href="javascript:void(0)"
                                                    class="text-primary fw-500 hover-primary"><i
                                                        class="ion ion-locked"></i> Olvidaste contraseña?</a><br>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary w-p100 mt-10">Entrar</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Vendor JS -->
    <script src="{{ asset('app-assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('app-assets/icons/feather-icons/feather.min.js') }}"></script>

</body>

</html>
