<?php

class ControladorFormulario
{
	/**
	 * Guarda los datos en la base de datos
	 */
	static public function ctrRegistro()
	{
		if (isset($_POST['registroNombre'])) {

			$tabla = "registro";

			$datos = array('codigo_inst' => $_POST["registroCodigo"],
				'cedula' => $_POST["registroCedula"],
				'nombre' => $_POST["registroNombre"],
				'apellido' => $_POST["registroApellido"],
				'correo' => $_POST["registroCorreo"],
				'telefono' => $_POST["registroTelefono"],
				'ciudad' => $_POST["registroCiudad"],
				'departamento' => $_POST["registroDepartamento"],
				'cargo' => $_POST["registroCargo"],
				'password' => $_POST["registroPassword"],
				'password1' => $_POST["registroPassword1"]);


			$respuesta = ModeloFormularios::mdlRegistrosUsuario($tabla, $datos);
			return $respuesta;
		}
	}
	/**
	 * Seleccionar registros de la base de datos
	 */
	static public function ctrSeleccionarRegistros($item, $valor)
	{
		$tabla = "registro";
		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
		return $respuesta;
	}

	/**
	 * Ingreso o login al sistema 
	 */
	public function ctrIngreso()
	{

		if (isset($_POST["ingresoCorreo"])) {

			$tabla = "registro";
			$item = "correo";
			$valor = $_POST["ingresoCorreo"];

			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

			if ($respuesta["correo"] == $_POST["ingresoCorreo"] && $respuesta["password"] == $_POST["ingresoPassword"]) {

				$_SESSION["validarIngreso"] = "ok";

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=inicio";

				</script>';

			}
			else {


				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

				</script>';

				echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
			}

		}
	}	/* Actualizar Registro */
	public static function ctrActualizarRegistro()	{

		/* validamos si viene una variable actualizar nombre */
		if (isset($_POST['actualizarNombre'])) {

			if ($_POST['actualizarPassword'] != '') {
				$password = $_POST['actualizarPassword'];
			} else {
				$password = $_POST['passwordActual'];
			}

			$tabla = "registro";
			$datos = array(
				'id' => $_POST['idUsuario'],
				'nombre' => $_POST['actualizarNombre'],
				'apellido' => $_POST['actualizarApellido'],
				'correo' => $_POST['actualizarCorreo'],
				'telefono' => $_POST['actualizarTelefono'],
				'ciudad' => $_POST['actualizarCiudad'],
				'departamento' => $_POST['actualizarDepartamento'],
				'cargo' => $_POST['actualizarCargo'],
				'password' => $password
			);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);
			return $respuesta;	
		}
	}

	/* Eliminar Registro */
	public function ctrEliminarRegistro()
	{

		if (isset($_POST["eliminarRegistro"])) {

			$tabla = "registro";
			$valor = $_POST['eliminarRegistro'];

			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

			if ($respuesta == 'ok') {

				header("Location: index.php?pagina=inicio");
			}
		}
	}
}


