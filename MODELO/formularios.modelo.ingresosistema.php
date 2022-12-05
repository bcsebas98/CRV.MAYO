<?php

class ModeloFormulariosIngresoSistema
{
	static public function mdlIngresosistema($tabla, $datos)
	{
		/**
		 * 
		 */
		#declaracion: statement

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fecha, ci_conductor, nombres, placa, chasis, motor, tipo, marca, servicio, color, articulo, letra, ley_de_transito, motivo_ingreso, citacion, medio_ingreso, observaciones, articulos_encontrados_interior, anden, sellos, fotos) VALUES (:fecha,:ci_conductor, :nombres, :placa, :chasis, :motor, :tipo, :marca, :servicio, :color,:articulo, :letra, :ley_de_transito, :motivo_ingreso, :citacion, :medio_ingreso, :observaciones, :articulos_encontrados_interior, :anden, :sellos, :fotos)");
		

		$stmt->bindParam(":fecha", $datos['fecha'], PDO::PARAM_STR);
		$stmt->bindParam(":ci_conductor", $datos['ci_conductor'], PDO::PARAM_STR);
		$stmt->bindParam(":nombres", $datos['nombres'], PDO::PARAM_STR);
		$stmt->bindParam(":placa", $datos['placa'], PDO::PARAM_STR);
		$stmt->bindParam(":chasis", $datos['chasis'], PDO::PARAM_STR);
		$stmt->bindParam(":motor", $datos['motor'], PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $datos['tipo'], PDO::PARAM_STR);
		$stmt->bindParam(":marca", $datos['marca'], PDO::PARAM_STR);
		$stmt->bindParam(":servicio", $datos['servicio'], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos['color'], PDO::PARAM_STR);
		$stmt->bindParam(":articulo", $datos['articulo'], PDO::PARAM_STR);
		$stmt->bindParam(":letra", $datos['letra'], PDO::PARAM_STR);
		$stmt->bindParam(":ley_de_transito", $datos['ley_de_transito'], PDO::PARAM_STR);
		$stmt->bindParam(":motivo_ingreso", $datos['motivo_ingreso'], PDO::PARAM_STR);
		$stmt->bindParam(":citacion", $datos['citacion'], PDO::PARAM_STR);
		$stmt->bindParam(":medio_ingreso", $datos['medio_ingreso'], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos['observaciones'], PDO::PARAM_STR);
		$stmt->bindParam(":articulos_encontrados_interior", $datos['articulos_encontrados_interior'], PDO::PARAM_STR);
		$stmt->bindParam(":anden", $datos['anden'], PDO::PARAM_STR);
		$stmt->bindParam(":sellos", $datos['sellos'], PDO::PARAM_STR);
		$stmt->bindParam(":fotos", $datos['fotos'], PDO::PARAM_STR);

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