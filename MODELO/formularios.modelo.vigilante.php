<?php 

class ModeloFormularioVigilante
{

static public function mdlRegistrosVigilante($tabla, $datos)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo_vigilante, nombre_vigilante, apellido_vigilante, hora_entrada, hora_salida, fecha) VALUES (:codigo_vigilante, :nombre_vigilante, :apellido_vigilante, :hora_entrada, :hora_salida, :fecha)");



		$stmt->bindParam(":codigo_vigilante", $datos['codigo_vigilante'], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_vigilante", $datos['nombre_vigilante'], PDO::PARAM_STR);
		$stmt->bindParam(":apellido_vigilante", $datos['apellido_vigilante'], PDO::PARAM_STR);
		$stmt->bindParam(":hora_entrada", $datos['hora_entrada'], PDO::PARAM_STR);
		$stmt->bindParam(":hora_salida", $datos['hora_salida'], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos['fecha'], PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		}
		else {

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->close();
		$stmt = null;

	}
}