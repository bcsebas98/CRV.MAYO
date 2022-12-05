<?php
$usuarios = ControladorFormulario::ctrSeleccionarRegistros(null,null);
?>
<div class="table-responsive">
<table class="table table-striped bg-dark text-white">
	<thead>
		<tr>
			<th>#</th>
			<th>Código Institucional</th>
			<th>Cédula</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
			<th>Teléfono</th>
			<th>Ciudad</th>
			<th>Departamento</th>
			<th>Cargo</th>
			<th>Fecha</th>
			<th>CRUD</th>
		</tr>
	</thead>
	<tbody>
	<?php	foreach ($usuarios as $key => $value): ?>
		<tr>
			<td><?=($key+1); ?></td>
			<td><?=$value['codigo_inst']; ?></td>
			<td><?=$value['cedula']; ?></td>
			<td><?=$value['nombre']; ?></td>
			<td><?=$value['apellido']; ?></td>
			<td><?=$value['correo']; ?></td>
			<td><?=$value['telefono']; ?></td>
			<td><?=$value['ciudad']; ?></td>		
			<td><?=$value['departamento']; ?></td>
			<td><?=$value['cargo']; ?></td>
			<td><?=$value['fecha']; ?></td>
			<td>

				<div class="btn-group">
					<div class="p-1">
						<a href="index.php?pagina=editarRegistros&id=<?=$value['id']?>" class="btn btn-warning ">
							<i class="fas fa-pencil-alt"></i>
						</a>
					</div>

					<div class="p-1">
						<form method="post">
							<input type="hidden" value="<?=$value['id']?>" name="eliminarRegistro">
							<button type="submit" href="index.php?pagina=editarRegistros" class="btn btn-danger ">
								<i class="fas fa-trash-alt"></i>
							</button>
						</form>

						<?php 
							$eliminar = new ControladorFormulario();
							$eliminar->ctrEliminarRegistro();
						
						?>


					</div>

				</div>
			</td>
		</tr>
		<?php endforeach?>
		
	</tbody>
</table>
</div>