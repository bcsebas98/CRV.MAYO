<?php
if(isset($_GET["id"])){
$item = "id";
$valor  = $_GET["id"];
$usuario = ControladorFormulario::ctrSeleccionarRegistros($item,$valor);
}
?>

<div class="d-flex justify-content-center text-center">
	<form class="p-3 bg-light" method="post">

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>
				<input type="date" class="form-control" value="<?php echo $usuario["fecha"];?>" placeholder="Ingrese la fecha" id="fecha" name="actualizarFecha">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["placa"];?>"placeholder="Escriba la placa" id="placa" name="actualizarPlaca">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["vehiculo"];?>"placeholder="Escriba el vehiculo" id="vehiculo" name="actualizarVehiculo">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["marca"];?>"placeholder="Escriba la marca" id="marca" name="actualizarMarca">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">	
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["color"];?>"placeholder="Escriba el color" id="color" name="actualizarColor">		
			</div>	
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["motivo"];?>"placeholder="Escriba el motivo" id="motivo" name="actualizarMotivo">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["recibido_por"];?>"placeholder="Recibido por" id="recibido_por" name="actualizarRecibido_por">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["gruas"];?>"placeholder="Gruas" id="gruas" name="actualizarGruas">
			</div>
		</div>

        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["elaborar_parte"];?>"placeholder="Elaboraración parte" id="elaborar_parte" name="actualizarElaborar_parte">
			</div>
		</div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["lugar_hechos"];?>"placeholder="Lugar hechos" id="lugar_hechos" name="actualizarLugar_hechos">
			</div>
		</div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["entregado_por"];?>"placeholder="Entregado por" id="entregado_por" name="actualizarEntregado_por">
			</div>
		</div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["inventario"];?>"placeholder="inventario" id="inventario" name="actualizarInventario">
			</div>
		</div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["anden"];?>"placeholder="Anden" id="anden" name="actualizAnden">
			</div>
		</div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["observaciones"];?>"placeholder="Observaciones" id="observaciones" name="actualizarObservaciones">
			</div>
		</div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["encargado_asentar"];?>"placeholder="Encargado asentar" id="encargado_asentar" name="actualizarEncargado_asentar">
			</div>
		</div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>
				<input type="text" class="form-control" value="<?php echo $usuario["codigo"];?>"placeholder="Codigo" id="codigo" name="actualizarCodigo">
			</div>
		</div>


		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>
				<input type="password" class="form-control" placeholder="Escriba la contraseña" id="pwd" name="actualizarPassword">
				<input type="hidden" name="passwordA" value="<?php echo $usuario["password"]; ?>">
				<input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">

			</div>

		</div>
		<?php
		$actualizar = new ControladorFormulario();
$actualizar -> ctrActualizarRegistro();
?>
			<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>
</div>