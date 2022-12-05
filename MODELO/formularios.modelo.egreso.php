<?php 

class ModeloFormulariosEgreso
{

	static public function mdlRegistrosEgreso($tabla, $datos)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(no_tramite, no_orden, propietario, placa, motor, tonelaje, casillero, alfombras, fecha_ingreso, no_identificacion, nombres_ciudadano, telefono, direccion, correo, no_identificacion1, nombres_ciudadano1, telefono1, direccion1, correo1, autoriza, observaciones) VALUES (:no_tramite, :no_orden, :propietario, :placa, :motor, :tonelaje, :casillero, :alfombras, :fecha_ingreso, :no_identificacion, :nombres_ciudadano, :telefono, :direccion, :correo, :no_identificacion1, :nombres_ciudadano1, :telefono1, :direccion1, :correo1, :autoriza, :observaciones)");


		$stmt->bindParam(":no_tramite", $datos['no_tramite'], PDO::PARAM_STR);
		$stmt->bindParam(":no_orden", $datos['no_orden'], PDO::PARAM_STR);
		$stmt->bindParam(":propietario", $datos['propietario'], PDO::PARAM_STR);
		$stmt->bindParam(":placa", $datos['placa'], PDO::PARAM_STR);
		$stmt->bindParam(":motor", $datos['motor'], PDO::PARAM_STR);
		$stmt->bindParam(":tonelaje", $datos['tonelaje'], PDO::PARAM_STR);
		$stmt->bindParam(":casillero", $datos['casillero'], PDO::PARAM_STR);
		$stmt->bindParam(":alfombras", $datos['alfombras'], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_ingreso", $datos['fecha_ingreso'], PDO::PARAM_STR);
		$stmt->bindParam(":no_identificacion", $datos['no_identificacion'], PDO::PARAM_STR);
		$stmt->bindParam(":nombres_ciudadano", $datos['nombres_ciudadano'], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
		$stmt->bindParam(":direccion", $datos['direccion'], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos['correo'], PDO::PARAM_STR);
		$stmt->bindParam(":no_identificacion1", $datos['no_identificacion1'], PDO::PARAM_STR);
		$stmt->bindParam(":nombres_ciudadano1", $datos['nombres_ciudadano1'], PDO::PARAM_STR);
		$stmt->bindParam(":telefono1", $datos['telefono1'], PDO::PARAM_STR);
		$stmt->bindParam(":direccion1", $datos['direccion1'], PDO::PARAM_STR);
		$stmt->bindParam(":correo1", $datos['correo1'], PDO::PARAM_STR);
		$stmt->bindParam(":autoriza", $datos['autoriza'], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos['observaciones'], PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		}
		else {

			print_r(Conexion::conectar()->errorInfo());
		}

		//$stmt->close();
		$stmt = null;

	}
	
	 
}