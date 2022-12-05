<?php
$ingresoPatio = ControladorFormulario::ctrSeleccionarRegistros(null,null);
?>
<table class="table table-striped bg-dark text-white">
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>CI conductor</th>
            <th>Nombres</th>
            <th>Placa</th>
            <th>Chasis</th>
            <th>Motor</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Servicio</th>
            <th>Color</th>
            <th>Articulo</th>
            <th>Letra</th>
            <th>Ley de transito</th>
            <th>Motivo</th>
            <th>Citación</th>
            <th>Medio de ingreso</th>
            <th>Observaciones</th>
            <th>Articulos</th>
            <th>Anden</th>
            <th>Sellos</th>
            <th>CRUD</th>
        </tr>
    </thead>
    <tbody>
        <?php	foreach ($ingresoSistema as $key => $value): ?>
        <tr>
            <td><?=($key+1); ?></td>
            <td><?=$value['fecha']; ?></td>
            <td><?=$value['ci_conductor']; ?></td>
            <td><?=$value['nombres']; ?></td>
            <td><?=$value['placa']; ?></td>
            <td><?=$value['chasis']; ?></td>
            <td><?=$value['motor']; ?></td>
            <td><?=$value['tipo']; ?></td>
            <td><?=$value['marca']; ?></td>
            <td><?=$value['servicio']; ?></td>
            <td><?=$value['color']; ?></td>
            <td><?=$value['articulo']; ?></td>
            <td><?=$value['letra']; ?></td>
            <td><?=$value['ley_de_transito']; ?></td>
            <td><?=$value['motivo_ingreso']; ?></td>
            <td><?=$value['citacion']; ?></td>
            <td><?=$value['medio_ingreso']; ?></td>
            <td><?=$value['observaciones']; ?></td>
            <td><?=$value['articulos_encontrados_interior']; ?></td>
            <td><?=$value['anden']; ?></td>
            <td><?=$value['sellos']; ?></td>
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