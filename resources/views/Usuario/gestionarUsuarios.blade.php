@extends('Plantilla.Principal')
@section('title', 'Gestionar departamentos')
@section('Contenido')

    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Gestionar usuarios</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Inicio</li>
                            <li class="breadcrumb-item active" aria-current="page">Gestionar usuarios</li>
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
                        <h5 class="card-title">Listado de usuarios</h5>
                    </div>
                    <div class="card-body">
                        <div class="box-controls pull-right">
                            <div class="box-header-actions">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="busqueda" class="form-control">
                                    <div class="input-group-text" data-password="false">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <button type="button" onclick="openModalUsuario();" class="btn btn-xs btn-primary"><i
                                            class="fa fa-plus"></i> Nuevo
                                        registro</button>
                                </div>

                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width:55%;">Nombre</th>
                                    <th style="width:15%;">Usuario</th>
                                    <th style="width:10%;">Tipo usuario</th>
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

            <div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Agregar usuario</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form" id="formUsuario">
                                <input type="hidden" name="accUsuario" value="guardar" id="accUsuario" />
                                <input type="hidden" name="idUsuario" value="" id="idUsuario" />
                                <input type="hidden" id="usuarioOriginal" name="usuarioOriginal" value="">

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="nombre" class="form-label">Nombre :</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                            <input type="text" id="nombre" name="nombre" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tipo" class="form-label">Tipo de usuario :</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-key"></i></span>
                                            <select class="form-control" id="tipo" name="tipo">
                                                <option value="">Seleccione...</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Docente">Docente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="usuario" class="form-label">Usuario :</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-user"></i></span>
                                            <input type="text" id="usuario" name="usuario" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email :</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-email"></i></span>
                                            <input type="email" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div id="div-cambioPasw" style="display: none;" class="form-group">
                                        <label for="cambioPasw" class="form-label">Actualizar contraseña :</label>
                                       
                                        <label class="switch switch-border switch-primary">
                                            <input type="checkbox" onchange="habilitarPasw()" id="cambioPasw" name="cambioPasw">
                                            <span class="switch-indicator"></span>
                                            <span class="switch-description"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="pasw" class="form-label">Contraseña :</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                            <input type="password" id="pasw" name="pasw" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confPasw" class="form-label">Confirmar Contraseña :</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"><i class="ti-lock"></i></span>
                                            <input type="password" id="confPasw" name="confPasw" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <!-- /.box-body -->
                                <div class="box-footer text-end">
                                    <button type="button" onclick="nuevo();" style="display: none;" id="btn-nuevo"
                                        class="btn btn-primary-light me-1">
                                        <i class="ti-plus "></i> Nuevo
                                    </button>
                                    <button type="button" id="btn-cancel" onclick="cancelar();"
                                        class="btn btn-primary-light me-1">
                                        <i class="ti-close"></i> Cancelar
                                    </button>
                                    <button type="button" id="btn-guardar" onclick="guardar();"
                                        class="btn btn-primary">
                                        <i class="ti-save"></i> Guardar
                                    </button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div><!-- /.modal -->
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let menuP = document.getElementById("principalUsuarios");
            let menuS = document.getElementById("principalUsuarioGestionar");
            document.getElementById("divBusquedaGen").style.display = 'none';
            menuP.classList.add("active", "menu-open");
            menuS.classList.add("active");

            loader = document.getElementById('loader');
            loadNow(1);

            $("#formUsuario").validate({
                rules: {
                    nombre: {
                        required: true
                    },
                    tipo: {
                        required: true
                    },
                    usuario: {
                        required: true,
                        remote: {
                            url: "/verificar-usuario", // URL para la verificación
                            type: "post",
                            data: {
                                usuario: function() {
                                    return $("#usuario").val();
                                },
                                usuarioOriginal: function() {
                                    return $("#usuarioOriginal")
                                .val(); // Usuario original en caso de edición
                                },
                                _token: function() {
                                    return "{{ csrf_token() }}"; // Genera el token CSRF
                                }
                            },
                            // Validar solo si el usuario cambió
                            beforeSend: function(xhr, settings) {
                                if ($("#usuario").val() === $("#usuarioOriginal").val()) {
                                    // Cancelar la validación si el usuario no cambió
                                    xhr.abort();
                                }
                            }
                        }
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    pasw: {
                        required: true,
                        minlength: 6
                    },
                    confPasw: {
                        required: true,
                        equalTo: "#pasw"
                    }
                },
                messages: {
                    nombre: {
                        required: "Por favor, ingresa el nombre del usuario."
                    },
                    tipo: {
                        required: "Por favor, selecciona el tipo de usuario."
                    },
                    usuario: {
                        required: "Por favor, ingresa el nombre de usuario.",
                        remote: "Este nombre de usuario ya está registrado. Por favor, elige otro."
                    },
                    email: {
                        required: "Por favor, ingresa un email.",
                        email: "Por favor, ingresa un email válido."
                    },
                    pasw: {
                        required: "Por favor, ingresa una contraseña.",
                        minlength: "La contraseña debe tener al menos 6 caracteres."
                    },
                    confPasw: {
                        required: "Por favor, confirma la contraseña.",
                        equalTo: "Las contraseñas no coinciden."
                    }
                },
                submitHandler: function(form) {
                    guardar();
                }
            });

            cargarListaUsuarios(1);
        });

        function cargarListaUsuarios(page, searchTerm = '') {
            let url = "{{ route('usuarios.listaUsuarios') }}";

            var oldPageInput = document.getElementById('page');
            var oldSearchTermInput = document.getElementById('searchTerm');
            if (oldPageInput) oldPageInput.remove();
            if (oldSearchTermInput) oldSearchTermInput.remove();

            var data = {
                page: page,
                search: searchTerm
            };

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
                    document.getElementById('trRegistros').innerHTML = responseData.usuarios;
                    feather.replace();
                    document.getElementById('pagination-links').innerHTML = responseData.links;
                    loadNow(0);
                })
                .catch(error => console.error('Error:', error));

        }

        function editarUsuario(idUsuario){
            var modal = new bootstrap.Modal(document.getElementById("modalUsuario"), {
                backdrop: 'static',
                keyboard: false
            });

            modal.show();

            document.getElementById("idUsuario").value = idUsuario
            document.getElementById("accUsuario").value = "editar"
            document.getElementById("div-cambioPasw").style.display = ''
            document.getElementById('pasw').setAttribute('disabled', 'disabled')
            document.getElementById('confPasw').setAttribute('disabled', 'disabled')
            document.getElementById('cambioPasw').checked = false

            let url = "{{ route('usuario.buscaUsuario') }}";

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        idUsuario: idUsuario
                    })
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById("nombre").value = data.nombre_usuario
                    document.getElementById("tipo").value = data.tipo_usuario
                    document.getElementById("usuario").value = data.login_usuario
                    document.getElementById("usuarioOriginal").value = data.login_usuario
                    document.getElementById("email").value = data.email_usuario
                })
                .catch(error => console.error('Error:', error));
            
        }

        function eliminarUsuario(idUsuario){
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
                    let url = "{{ route('usuario.eliminarUsuario') }}";
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                idUsuario: idUsuario
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                swal("¡Buen trabajo!",
                                    data.message,
                                    "success");
                                cargarListaUsuarios();
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

        function openModalUsuario() {
            var modal = new bootstrap.Modal(document.getElementById("modalUsuario"), {
                backdrop: 'static',
                keyboard: false
            });

            nuevo();
            modal.show();
        }

        function cancelar() {
            const formUsuario = document.getElementById('formUsuario');
            formUsuario.reset();
        }

        function habilitarPasw(){
            const pasw = document.getElementById("pasw");
            console.log(pasw.disabled)
            if(pasw.disabled){
                document.getElementById('pasw').removeAttribute('disabled', 'disabled')
                document.getElementById('confPasw').removeAttribute('disabled', 'disabled') 
            }else{
                document.getElementById('pasw').setAttribute('disabled', 'disabled')
                document.getElementById('confPasw').setAttribute('disabled', 'disabled')
            }
        }

        function nuevo() {
            cancelar()

            document.getElementById('btn-guardar').removeAttribute('disabled')
            document.getElementById('btn-nuevo').style.display = 'none'
            document.getElementById('btn-cancel').style.display = 'initial'
            document.getElementById("accUsuario").value = "guardar"
            document.getElementById("div-cambioPasw").style.display = 'none'
            document.getElementById('pasw').removeAttribute('disabled', 'disabled')
            document.getElementById('confPasw').removeAttribute('disabled', 'disabled')
        }

        function guardar() {

            if ($("#formUsuario").valid()) {

                const formUsuario = document.getElementById('formUsuario');
                const formData = new FormData(formUsuario);

                const url = "{{ route('form.guardarUsusario') }}";

                fetch(url, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        if (data.success) {
                            swal({
                                title: "¡Buen trabajo!",
                                text: "La operación fue realizada exitosamente",
                                icon: "success",
                                timer: 3000
                            });

                            document.getElementById('btn-guardar').setAttribute('disabled', 'disabled')
                            document.getElementById('btn-nuevo').style.display = 'initial'
                            document.getElementById('btn-cancel').style.display = 'none'

                            cargarListaUsuarios(1)
                            document.getElementById("accUsuario").value = "guardar"

                        } else {
                            console.error('Error en el procesamiento:', data.message);
                        }
                    })
                    .catch(error => {
                        console.error("Error al enviar los datos:", error);
                    });

            }
        }
    </script>

@endsection
