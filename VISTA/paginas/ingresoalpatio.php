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

<h2 class= text-center>Ingreso al Patio</h1>
<div class="justify-content-center text-center text-white ">
    <form class="p-3 row <nav class=" style="background-color: #001D3D;" method="post">
        <div class="p-3 row justify-content-center  text-center text-white" style="background-color: #001D3D">
            <div class="form-group col-md-3">
                <label for="fecha">Fecha:</label>
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                    <input type="date" class="form-control" id="fecha" name="registroFecha">
                </div>

            </div>

            <div class="form-group col-md-3">
                <label for="placa">Placa:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-sort-alpha-down"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="placa" name="registroPlaca" placeholder="Ingrese la placa">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="vehiculo">Vehículo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="bi bi-car-front-fill"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="vehiculo" name="registroVehiculo" placeholder="Ingrese el Vehículo">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="marca">Marca vehículo:</label>
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
                <label for="motivo">Motivo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-file-signature"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="motivo" name="registroMotivo" placeholder="Ingrese Motivo">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="recibido_por">Recibido por:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user-check"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="recibido_por" name="registroRecibidopor" placeholder="Ingrese quien recibe">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="gruas">Grúas:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-truck-loading"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="gruas" name="registroGruas" placeholder="Ingrese la grúa">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="elaborar_parte">Elaborar parte:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-file-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="elaborar_parte" name="registroElaborarparte">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="lugar_hechos">Lugar de los Hechos:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-file-signature"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="lugar_hechos" name="registroLugarhechos" placeholder="Ingrese lugar">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="entregado_por">Entregado por:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-id-badge"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="entregado_por" name="registroEntregadopor" placeholder="Ingrese quien lo entrega">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="inventario">Inventario No:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-sort-numeric-down"></i>
                        </span>
                    </div>
                    <input type="integer" class="form-control" id="inventario" name="registroInventario" placeholder="Ingrese No. de inventario">
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
                <label for="encargado_asentar">Encargado de Asentar:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="encargado_asentar" name="registroEncargadoasentar" placeholder="Ingrese encargado">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="codigo">Código de quien asienta:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-code"></i>
                        </span>
                    </div>
                    <input type="integer" class="form-control" id="codigo" name="registroCodigo" placeholder="Ingrese código">
                </div>
            </div>
            <div>
                <div class="container mt-3">
                    <?php
                    if (isset($_REQUEST['custom-file-input'])) {
                        $regImagen = $_FILES['registroImagen'];
                        $imagenSubida = fopen($_FILES['registroImagen']['tmp_name'], 'r');
                        $binariosImagen = fread($imagenSubida, $regImagen);
                        include_once "";
                        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                        $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                        $query = "INSERT INTO crv(imagen)values 
                        ('" . $regImagen . "')";
                    }
                    ?>
                    <form action="/action_page.php">
                        <div class="custom-file mb-2">
                            <input type="file" class="custom-file-input" id="imagen" name="registroImagen">
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
                $registro = ControladorFormularioIngresoPatio::ctrRegistroIngresoPatio();

                if ($registro == "ok") {

                    echo '<script>
                    if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                    }
                    </script>';

                    echo '<div class="alert alert-success">La información ha sido registrada</div>';
                }
                ?>
                <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
            </div>
        </div>
    </form>
</div>