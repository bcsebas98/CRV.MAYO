<!--<?php
if (!isset($_SESSION["validarIngreso"])) {

	header("Location: index.php?pagina=registro");	

	//echo '<script>window.location = "index.php?pagina=ingreso";</script>';

	//return;
}   
else {

	if ($_SESSION["validarIngreso"] != "ok") {
		//echo '<script>window.location = "index.php?pagina=ingreso";</script>';
		//return;
		header("Location: index.php?pagina=registro");
	}
}
?>
-->

<div class="text-center">
    <h2>Novedades</h2>
</div>

<div class="d-flex justify-content-center text-center text-white">
    <form class="p-3 row <nav class=" style="background-color: #001D3D;" method="post">

        <div class="form-group col-md-3 ">
            <label for="nombres">Nombres:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-sort-numeric-up-alt"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="nombres" name="registroNombres"
                    placeholder="Ingrese Nombres">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="apellidos">Apellidos:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-sort-numeric-up"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="apellidos" name="registroApellidos"
                    placeholder="Ingrese Apellidos">
            </div>
        </div>


        <div class="form-group col-md-3">
            <label for="total_denuncias">Total Denuncias:</label>
            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-male"></i>
                    </span>
                </div>
                <input type="integer" class="form-control" id="total_denuncias" name="registroTotaldenuncias"
                    placeholder="Ingrese No. Denuncias">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="tipo_solicitud">Tipo de solicitud:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-sort-alpha-down"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="tipo_solicitud" name="registroTiposolicitud"
                    placeholder="Ingrese Tipo de solicitud">

            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="parte_informativo">Parte informativo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="parte_informativo" name="registroParteinformativo"
                    placeholder="Ingrese Parte informativo">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="implementos">Implementos:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="implementos" name="registroImplementos"
                    placeholder="Ingrese implementos">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="solicitudes">Solicitudes:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="solicitudes" name="registroSolicitudes"
                    placeholder="Ingrese Solicitudes">
            </div>
        </div>




        <?php 

        $registro = ControladorFormularioNovedades::ctrRegistroNovedades();

        if($registro == "ok"){

            echo '<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>';

            echo '<div class="alert alert-success">La información ha sido registrada</div>';
        }


        ?>
        <button type="submit" class=" btn btn-primary btn-block">Registrar</button>
    </form>
</div>