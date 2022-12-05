<?php 
class ControladorFormularioEgreso
{
	/**
	 * Guarda los datos en la base de datos
	 */
	static public function ctrRegistroEgreso()
	{
		if (isset($_POST['registroNombre'])) {

			$tabla = "egreso";

			$datos = array('no_tramite' => $_POST["registroTramite"],
				'no_orden' => $_POST["registroOrden"],
				'propietario' => $_POST["registroPropietario"],
				'placa' => $_POST["registroPlaca"],
				'motor' => $_POST["registroMotor"],
				'tonelaje' => $_POST["registroTonelaje"],
				'casillero' => $_POST["registroCasillero"],
				'alfombras' => $_POST["registroAlfombras"],
				'fecha_ingreso' => $_POST["registroFecha"],
				'no_identificacion' => $_POST["registroIdentificacion"],
				'nombres_ciudadano' => $_POST["registroNombre"],
			    'telefono' => $_POST["registroTelefono"],
                'direccion' => $_POST["registroDireccion"],
                'correo' => $_POST["registroCorreo"],
				'no_identificacion1' => $_POST["registroIdentificacion1"],
				'nombres_ciudadano1' => $_POST["registroNombre1"],
				'telefono1' => $_POST["registroTelefono1"],
				'direccion1' => $_POST["registroDireccion1"],
				'correo1' => $_POST["registroCorreo1"],
				'autoriza' => $_POST["registroAutoriza"],
				'observaciones' => $_POST["registroObservaciones"]);


			$respuesta = ModeloFormulariosEgreso::mdlRegistrosEgreso($tabla, $datos);
			return $respuesta;
		}
	}
	

}



