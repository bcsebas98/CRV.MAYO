<?php 
class ControladorFormularioIngresoPatio
{
	/**
	 * Guarda los datos en la base de datos
	 */
	static public function ctrRegistroingresoPatio()
	{
		if (isset($_POST['registroPlaca'])) {

			$tabla = "crv";

			$datos = array('fecha' => $_POST["registroFecha"],
				'placa' => $_POST["registroPlaca"],
				'vehiculo' => $_POST["registroVehiculo"],
				'marca' => $_POST["registroMarca"],
				'color' => $_POST["registroColor"],
				'motivo' => $_POST["registroMotivo"],
				'recibido_por' => $_POST["registroRecibidopor"],
				'gruas' => $_POST["registroGruas"],
				'elaborar_parte' => $_POST["registroElaborarparte"],
				'lugar_hechos' => $_POST["registroLugarhechos"],
				'entregado_por' => $_POST["registroEntregadopor"],
			    'inventario' => $_POST["registroInventario"],
                'anden' => $_POST["registroAnden"],
                'observaciones' => $_POST["registroObservaciones"],
				'encargado_asentar' => $_POST["registroEncargadoasentar"],
				'codigo' => $_POST["registroCodigo"],
				'imagen' => $_POST["registroImagen"]);
				

			$respuesta = ModeloFormulariosIngresoPatio::mdlRegistrosIngresoPatio($tabla, $datos);
			return $respuesta;
		}
	}

	static public function ctrSeleccionarRegistrosingresoPatio($item, $valor)
	{
		$tabla = "crv";
		$respuesta = ModeloFormulariosIngresoPatio::mdlSeleccionarRegistrosingresoPatio($tabla, $item, $valor);
		return $respuesta;
	}

	/* Actualizar Registro */
	public static function ctrActualizarRegistroingresoPatio()	{

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
				'email' => $_POST['actualizarEmail'],
				'password' => $password
			);

			
			$respuesta = ModeloFormulariosIngresoPatio::mdlActualizarRegistroingresoPatio($tabla, $datos);
			return $respuesta;
		}
	}

	/* Eliminar Registro */
	public function ctrEliminarRegistro()
	{

		if (isset($_POST["eliminarRegistro"])) {

			$tabla = "registro";
			$valor = $_POST['eliminarRegistro'];

			$respuesta = ModeloFormulariosIngresoPatio::mdlEliminarRegistroingresoPatio($tabla, $valor);

			if ($respuesta == 'ok') {
				header("Location: index.php?pagina=tablaingresoPatio");
			}
		}
	}
	

}
