<?php 
class ControladorFormularioVigilante
{
	/**
	 * Guarda los datos en la base de datos
	 */
	static public function ctrRegistroVigilante()
	{
		if (isset($_POST['registroNombre'])) {

			$tabla = "vigilante";

			$datos = array('codigo_vigilante' => $_POST["registroCodigo"],
				'nombre_vigilante' => $_POST["registroNombre"],
				'apellido_vigilante' => $_POST["registroApellido"],
				'hora_entrada' => $_POST["registroHoraentrada"],
				'hora_salida' => $_POST["registroHorasalida"],
				'fecha' => $_POST["registroFecha"]);


			$respuesta = ModeloFormularioVigilante::mdlRegistrosVigilante($tabla, $datos);
			return $respuesta;
		}
	}
}