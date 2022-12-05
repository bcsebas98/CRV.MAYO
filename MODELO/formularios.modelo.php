<?php

require_once "conexion.php";
class ModeloFormularios
{

	static public function mdlRegistrosUsuario($tabla, $datos)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo_inst, cedula, nombre, apellido, correo, telefono, ciudad, departamento, cargo, password, password1) VALUES (:codigo_inst, :cedula, :nombre, :apellido, :correo, :telefono, :ciudad, :departamento, :cargo, :password, :password1)");

		#bindParam() 
		/** Vincula un parámetro al nombre de variable especificado Vincula una variable de PHP a un parámetro de sustitución 
		 * con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
		 *  A diferencia de PDOStatement::bindValue(), la variable es vinculada como una referencia y solamente será evaluada en 
		 * el momento en el que se llame a PDOStatement::execute().*/

		$stmt->bindParam(":codigo_inst", $datos['codigo_inst'], PDO::PARAM_STR);
		$stmt->bindParam(":cedula", $datos['cedula'], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos['correo'], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos['ciudad'], PDO::PARAM_STR);
		$stmt->bindParam(":departamento", $datos['departamento'], PDO::PARAM_STR);
		$stmt->bindParam(":cargo", $datos['cargo'], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos['password'], PDO::PARAM_STR);
		$stmt->bindParam(":password1", $datos['password1'], PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		}
		else {

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->close();
		$stmt = null;

	}
	
	 /*Seleccionar registros de la base de datos */
	
	 static public function mdlSeleccionarRegistros($tabla, $item, $valor)
	 {
 
		 if ($item == null && $valor == null) {
 
			 $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");
 
			 $stmt->execute();
 
			 return $stmt->fetchAll();
 
		 }
		 else {
 
			 $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC");
 
			 $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
 
			 $stmt->execute();
 
			 return $stmt->fetch();
		 }
 
		 $stmt->close();
 
		 $stmt = null;
 
	 }
 
	
	static public function mdlActualizarRegistro($tabla, $datos)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre,apellido=:apellido,correo=:correo, telefono=:telefono, ciudad=:ciudad,departamento=:departamento,cargo=:cargo, password=:password WHERE id = :id");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":departamento", $datos["departamento"], PDO::PARAM_STR);
		$stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		if ($stmt->execute()) {
			return "ok";
		}
		else {

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->PDOStatement::close();
		$stmt = null;
}
static public function mdlEliminarRegistro($tabla, $valor)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id =:id");

		#bindParam() 
		/** Vincula un parámetro al nombre de variable especificado Vincula una variable de PHP a un parámetro de sustitución 
		 * con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
		 *  A diferencia de PDOStatement::bindValue(), la variable es vinculada como una referencia y solamente será evaluada en 
		 * el momento en el que se llame a PDOStatement::execute().*/

		
		$stmt->bindParam(":id", $valor, PDO::PARAM_INT);
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


