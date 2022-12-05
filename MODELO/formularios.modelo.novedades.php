<?php  

class ModeloFormulariosNovedades
{
static public function mdlRegistrosNovedades($tabla, $datos)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombres, apellidos, total_denuncias, tipo_solicitud, parte_informativo, implementos, solicitudes) VALUES (:nombres, :apellidos, :total_denuncias, :tipo_solicitud, :parte_informativo, :implementos, :solicitudes)");

		#bindParam() 
		/** Vincula un parámetro al nombre de variable especificado Vincula una variable de PHP a un parámetro de sustitución 
		 * con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
		 *  A diferencia de PDOStatement::bindValue(), la variable es vinculada como una referencia y solamente será evaluada en 
		 * el momento en el que se llame a PDOStatement::execute().*/

		$stmt->bindParam(":nombres", $datos['nombres'], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos", $datos['apellidos'], PDO::PARAM_STR);
		$stmt->bindParam(":total_denuncias", $datos['total_denuncias'], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_solicitud", $datos['tipo_solicitud'], PDO::PARAM_STR);
		$stmt->bindParam(":parte_informativo", $datos['parte_informativo'], PDO::PARAM_STR);
		$stmt->bindParam(":implementos", $datos['implementos'], PDO::PARAM_STR);
		$stmt->bindParam(":solicitudes", $datos['solicitudes'], PDO::PARAM_STR);

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