<?php
$ingresoPatio = ControladorFormularioingresoPatio::ctrSeleccionarRegistrosingresoPatio(null,null);
?>
<div class="table-responsive">
<table class="table table-striped bg-dark text-white">
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Placa</th>
            <th>Vehículo</th>
            <th>Marca Vehículo</th>
            <th>Color</th>
            <th>Motivo</th>
            <th>Recibido por</th>
            <th>Grúas</th>
            <th>Elaborar parte</th>
            <th>Lugar hechos</th>
            <th>Entregado por</th>
            <th>Inventario N°</th>
            <th>Anden</th>
            <th>Observaciones</th>
            <th>Encargado de asentar</th>
            <th>Código</th>
            <th>CRUD</th>
        </tr>
    </thead>
    <tbody>
        <?php	foreach ($ingresoPatio as $key => $value): ?>
        <tr>
            <td><?=($key+1); ?></td>
            <td><?=$value['fecha']; ?></td>
            <td><?=$value['placa']; ?></td>
            <td><?=$value['vehiculo']; ?></td>
            <td><?=$value['marca']; ?></td>
            <td><?=$value['color']; ?></td>
            <td><?=$value['motivo']; ?></td>
            <td><?=$value['recibido_por']; ?></td>
            <td><?=$value['gruas']; ?></td>
            <td><?=$value['elaborar_parte']; ?></td>
            <td><?=$value['lugar_hechos']; ?></td>
            <td><?=$value['entregado_por']; ?></td>
            <td><?=$value['inventario']; ?></td>
            <td><?=$value['anden']; ?></td>
            <td><?=$value['observaciones']; ?></td>
            <td><?=$value['encargado_asentar']; ?></td>
            <td><?=$value['codigo']; ?></td>
            <td>

                <div class="btn-group">
                    <div class="p-1">
                        <a href="index.php?pagina=editar&id=<?=$value['id']?>" class="btn btn-warning ">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </div>

                    <div class="p-1">
                        <form method="post">
                            <input type="hidden" value="<?=$value['id']?>" name="eliminarRegistro">
                            <button type="submit" href="index.php?pagina=editar" class="btn btn-danger ">
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