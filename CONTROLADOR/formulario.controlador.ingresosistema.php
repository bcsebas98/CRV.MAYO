<?php 

class ControladorFormularioIngresoSistema
{

	static public function ctrIngresosistema()
	{
		if (isset($_POST['registroConductor'])) {

			$tabla = "ingreso_sistema";

			$datos = array('fecha' => $_POST["registroFecha"],
				'ci_conductor' => $_POST["registroConductor"],
				'nombres' => $_POST["registroNombres"],
				'placa' => $_POST["registroPlaca"],
				'chasis' => $_POST["registroChasis"],
				'motor' => $_POST["registroMotor"],
				'tipo' => $_POST["registroTipo"],
				'marca' => $_POST["registroMarca"],
				'servicio' => $_POST["registroServicio"],
				'color' => $_POST["registroColor"],
				'articulo' => $_POST["registroArticulo"],
				'letra' => $_POST["registroLetra"],
				'ley_de_transito' => $_POST["registroLeytransito"],
				'motivo_ingreso' => $_POST["registroMotivoingreso"],
				'citacion' => $_POST["registroCitacion"],
				'medio_ingreso' => $_POST["registroMedio"],
				'observaciones' => $_POST["registroObservaciones"],
				'articulos_encontrados_interior' => $_POST["registroArticulosencontrados"],
				'anden' => $_POST["registroAnden"],
				'sellos' => $_POST["registroSellos"],
				'fotos' => $_POST["registroFotos"]);


			$respuesta = ModeloFormulariosIngresoSistema:: mdlIngresosistema($tabla, $datos);
			return $respuesta;
		}
	}
}