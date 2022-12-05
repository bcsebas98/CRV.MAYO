<!--<?php
    if (!isset($_SESSION["validarIngreso"])) {

        header("Location: index.php?pagina=registro");

        //echo '<script>window.location = "index.php?pagina=ingreso";</script>';

        //return;
    } else {

        if ($_SESSION["validarIngreso"] != "ok") {
            //echo '<script>window.location = "index.php?pagina=ingreso";</script>';
            //return;
            header("Location: index.php?pagina=registro");
        }
    }
    ?>
-->

<div class="text-center">
    <h2>Ingreso al Sistema </h2>
</div>

<div class="justify-content-center  text-center text-white ">
    <form class="p-3 row <nav class=" style="background-color: #001D3D;" method="post">

        <div class="form-group col-md-3 ">

            <label for="fecha">Fecha:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                </div>

                <input type="date" class="form-control" id="fecha" name="registroFecha">

            </div>

        </div>

        <div class="form-group col-md-3 ">
            <label for="ci_conductor">CI. Conductor:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-sort-alpha-down"></i>
                    </span>
                </div>
                <input type="integer" class="form-control" id="ci_conductor" name="registroConductor" placeholder="Ingrese Cedula del Conductor">
            </div>
        </div>

        <div class="form-group col-md-3 ">
            <label for="nombres">Nombres:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-car"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="nombres" name="registroNombres" placeholder="Ingrese Nombres">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="placa">Placa:</label>
            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="placa" name="registroPlaca" placeholder="Ingrese placa del vehiculo">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="chasis">No. de Chasis</label>
            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="chasis" name="registroChasis" placeholder="Ingrese chasis">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for=" motor">Motor:</label>
            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="motor" name="registroMotor" placeholder="Ingrese Cilindraje">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="tipo">Categoria:</label>
            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="tipo" name="registroTipo" placeholder="Ingrese Categoria">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for=" marca">Marca:</label>
            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="marca" name="registroMarca" placeholder="Ingrese marca">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="servicio">Servicio:</label>
            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="servicio" name="registroServicio" placeholder="Ingrese servicio">

            </div>
        </div>


        <div class="form-group col-md-3">
            <label for="color">Color:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-brush"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="color" name="registroColor" placeholder="Ingrese color">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="articulo">Articulo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-brush"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="articulo" name="registroArticulo" placeholder="Ingrese articulo">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="letra">Letra:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-brush"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="letra" name="registroLetra" placeholder="Ingrese Letra">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="ley_de_transito">Ley de transito:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-brush"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="ley_de_transito" name="registroLeytransito" placeholder="Ingrese ley">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="motivo_ingreso">Motivo de Ingreso:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="motivo_ingreso" name="registroMotivoingreso" placeholder="Ingrese montivo">
            </div>
        </div>


        <div class="form-group col-md-3">
            <label for="citacion">Citación:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user-check"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="citacion" name="registroCitacion" placeholder="Ingrese citación">

            </div>
        </div>


        <div class="form-group col-md-3">
            <label for="medio_ingreso">Medio de ingreso:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user-check"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="medio_ingreso" name="registroMedio" placeholder="Ingrese medio">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="observaciones">Observaciones:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-comment"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="observaciones" name="registroObservaciones" placeholder="Ingrese observaciones">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="articulos_encontrados_interior">Articulos interior del vehiculo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-truck-loading"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="articulos_encontrados_interior" name="registroArticulosencontrados" placeholder="Ingrese articulos">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="anden">Anden:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="anden" name="registroAnden" placeholder="Ingrese Anden">
            </div>
        </div>


        <div class="form-group col-md-3">
            <label for="sellos">Sellos:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="far fa-file-alt"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="sellos" name="registroSellos" placeholder="Ingrese sellos">
            </div>
        </div>

        <div>
            <div class="container mt-2">
                <form action="/action_page.php">

                    <div class="custom-file mb-2">
                        <input type="file" class="custom-file-input" id="fotos" name="registroFotos">
                        <label class="custom-file-label" for="customFile">Cargar imágenes:</label>
                    </div>
                </form>
            </div>

            <script>
                // Add the following code if you want the name of the file appear on select
                $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
            </script>


            <?php

            $registro = ControladorFormularioIngresoSistema::ctrIngresosistema();

            if ($registro == "ok") {

                echo '<script>
				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}
			</script>';

                echo '<div class="alert alert-success">Informacion registrada con éxito</div>';
            }


            ?>
            <div class=" col-12">
                <button type="submit" class=" btn btn-primary btn-block">Registrar</button>
            </div>
        </div>
    </form>

</div>