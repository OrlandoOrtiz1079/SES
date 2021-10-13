<?php
class ControladorAlumnos
{
    /*=============================================
    REGISTRO DE USUARIO
    =============================================*/
    public static function ctrCrearAlumno()
    {
        if (empty($_POST['nombre']) && empty($_POST['nocontrol']) && empty($_POST['carrera'])) {

        } else {

            $Object = new DateTime();
            $Object->setTimezone(new DateTimeZone('America/Mexico_City'));
            $DateEntrada = $Object->format("d-m-Y");
            $TimeEntrada = $Object->format("h:i:s a");
            $TimeSalida = $Object->format("h:i:s a");
            $control = $_POST["nocontrol"];

            $tabla = "alumnos";

            $validarAlumno = ModeloAlumnos::MdlMostrarAlumnos($tabla, $DateEntrada, $control);
            if ($validarAlumno == 'ok') {
                
                $actualizarAlumno = ModeloAlumnos::mdlActualizarAlumons($tabla, $TimeSalida, $control, $DateEntrada);
                if ($actualizarAlumno == 'ok') {
                    echo "Se actualizo";
                } else {
                    echo "No se actualizo";
                }

                echo '<script>
                         if(result.value){
                            window.location = "Registro";
                        }
                    </script>';
            } else {
                $datos = array(
                    "nombre" => $_POST["nombre"],
                    "nocontrol" => $_POST["nocontrol"],
                    "carrera" => $_POST["carrera"],
                    "entrada" => $DateEntrada,
                    "enhora" => $TimeEntrada,
                );
                $respuesta = ModeloAlumnos::mdlIngresarAlumnos($tabla, $datos);

                if ($respuesta == 'ok') {
                    echo '<script>
                            if(result.value){
                              window.location = "Registro";
                            }
                        </script>';
                }
            }
        }
    }
    /*=============================================
    MOSTRAR USUARIO
    =============================================
    public static function ctrMostrarUsuarios($item, $valor)
    {
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
        return $respuesta;
    }

    =============================================
    EDITAR USUARIO
    =============================================
    public static function ctrEditarUsuario($editarUsuario, $editarNombre, $editarPassword, $confirmarPassword, $passwordActual, $editarPerfil)
    {
        if (isset($_POST[$editarUsuario])) {
            if (
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST[$editarNombre]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST[$editarUsuario])
            ) {
                $tabla = "usuarios";
                if ($_POST[$editarPassword] != "" || $_POST[$confirmarPassword] != "") {
                    if ($_POST[$editarPassword] == $_POST[$confirmarPassword]) {
                        if (preg_match('/^[a-zA-Z0-9]+$/', $_POST[$editarPassword])) {
                            $encriptar = crypt($_POST[$editarPassword], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                        } else {
                            echo '<script>
                            Swal.fire({
                                    type: "error",
                                title: "¡La contraseña no puede estar vacio o llevar caracteres especiales!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                            }).then((result)=>{
                                if(result.value){
                                    window.location = "' . $_GET["ruta"] . '";
                                }
                                });
                            </script>';
                        }
                    } else {
                        echo '<script>
                        Swal.fire({
                                type: "error",
                            title: "¡La contraseña NO Coincide!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }).then((result)=>{
                            if(result.value){
                                window.location = "' . $_GET["ruta"] . '";
                            }
                            });
                        </script>';
                    }
                } else {
                    $encriptar = $_POST[$passwordActual];
                }


                $datos = array(
                    "nombre" => $_POST[$editarNombre],
                    "usuario" => $_POST[$editarUsuario],
                    "password" => $encriptar,
                    "perfil" => $_POST[$editarPerfil],
                );


                $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);
                if ($respuesta == "ok") {

                    if ($editarUsuario == "editarMiUsuario") {
                        $_SESSION['nombre'] = $datos['nombre'];
                    }
                    echo '<script>
                    Swal.fire({
                            type: "success",
                        title: "¡Modificado Correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                            }).then((result)=>{
                        if(result.value){
                            window.location = "' . $_GET["ruta"] . '";
                        }
                        });
                    </script>';
                }
            } else {
                echo '<script>
				Swal.fire({
					 type: "error",
					title: "¡El usuario no puede estar vacio o llevar caracteres especiales!",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
				}).then((result)=>{
					if(result.value){
						window.location = "' . $_GET["ruta"] . '";
					}
					});
			  </script>';
            }
        }
    }

    =============================================
    BORRAR USUARIO
    =============================================
    public static function ctrBorrarUsuario()
    {
        if (isset($_GET["idUsuario"])) {
            $tabla = "usuarios";
            $datos = $_GET["idUsuario"];

            $respuesta = ModeloUsuarios::MdlBorrarUsuario($tabla, $datos);
            if ($respuesta == "ok") {
                echo '<script>
			   Swal.fire({
					type: "success",
				   title: "¡Eliminado Correctamente!",
				   showConfirmButton: true,
				   confirmButtonText: "Cerrar",
				   closeOnConfirm: false
			   }).then((result)=>{
				   if(result.value){
					   window.location = "Usuarios";
				   }
				   });
			 </script>';
            }
        }
    }*/
}
