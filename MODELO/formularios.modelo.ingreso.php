<?php
require_once "conexion.php";
class ModeloFormulariosIngresoPatio
{

	static public function mdlRegistrosIngresoPatio($tabla, $datos)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fecha, placa, vehiculo, marca, color, motivo, recibido_por, gruas, elaborar_parte, lugar_hechos, entregado_por, inventario, anden, observaciones, encargado_asentar, codigo) VALUES (:fecha, :placa, :seleccion, :marca, :color, :motivo, :recibido_por, :gruas, :elaborar_parte, :lugar_hechos, :entregado_por, :inventario, :anden, :observaciones, :encargado_asentar, :codigo)");


		$stmt->bindParam(":fecha", $datos['fecha'], PDO::PARAM_STR);
		$stmt->bindParam(":placa", $datos['placa'], PDO::PARAM_STR);
		$stmt->bindParam(":vehiculo", $datos['vehiculo'], PDO::PARAM_STR);
		$stmt->bindParam(":marca", $datos['marca'], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos['color'], PDO::PARAM_STR);
		$stmt->bindParam(":motivo", $datos['motivo'], PDO::PARAM_STR);
		$stmt->bindParam(":recibido_por", $datos['recibido_por'], PDO::PARAM_STR);
		$stmt->bindParam(":gruas", $datos['gruas'], PDO::PARAM_STR);
		$stmt->bindParam(":elaborar_parte", $datos['elaborar_parte'], PDO::PARAM_STR);
		$stmt->bindParam(":lugar_hechos", $datos['lugar_hechos'], PDO::PARAM_STR);
		$stmt->bindParam(":entregado_por", $datos['entregado_por'], PDO::PARAM_STR);
		$stmt->bindParam(":inventario", $datos['inventario'], PDO::PARAM_STR);
		$stmt->bindParam(":anden", $datos['anden'], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos['observaciones'], PDO::PARAM_STR);
		$stmt->bindParam(":encargado_asentar", $datos['encargado_asentar'], PDO::PARAM_STR);
		$stmt->bindParam(":codigo", $datos['codigo'], PDO::PARAM_STR);

		if ($stmt->execute()) {
			return "ok";
		}
		else {

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->close();
		$stmt = null;

	}
	static public function mdlSeleccionarRegistrosingresoPatio($tabla, $item, $valor)
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
	static public function mdlActualizarRegistroingresoPatio($tabla, $datos)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, correo=:correo, password=:password WHERE id = :id");

		
		$stmt->bindParam(":placa", $datos["placa"], PDO::PARAM_STR);
		$stmt->bindParam(":seleccion", $datos["seleccion"], PDO::PARAM_STR);
		$stmt->bindParam(":marca", $datos["marca"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
		$stmt->bindParam(":motivo", $datos["motivo"], PDO::PARAM_STR);
		$stmt->bindParam(":gruas", $datos["gruas"], PDO::PARAM_STR);
		$stmt->bindParam(":lugar_hechos", $datos["lugar_hechos"], PDO::PARAM_STR);
		$stmt->bindParam(":inventario", $datos["inventario"], PDO::PARAM_STR);
		$stmt->bindParam(":lugar_hechos", $datos["lugar_hechos"], PDO::PARAM_STR);
		$stmt->bindParam(":anden", $datos["anden"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
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
static public function mdlEliminarRegistroingresoPatio($tabla, $valor)
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
	 