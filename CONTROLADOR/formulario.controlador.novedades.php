<?php 
class ControladorFormularioNovedades
{
	/**
	 * Guarda los datos en la base de datos
	 */
	static public function ctrRegistroNovedades()
	{
		if (isset($_POST['registroNombres'])) {

			$tabla = "novedades";

			$datos = array('nombres' => $_POST["registroNombres"],
				'apellidos' => $_POST["registroApellidos"],
				'total_denuncias' => $_POST["registroTotaldenuncias"],
				'tipo_solicitud' => $_POST["registroTiposolicitud"],
				'parte_informativo' => $_POST["registroParteinformativo"],
				'implementos' => $_POST["registroImplementos"],
				'solicitudes' => $_POST["registroSolicitudes"]);


			$respuesta = ModeloFormulariosNovedades::mdlRegistrosNovedades($tabla, $datos);
			return $respuesta;
		}
	}
}