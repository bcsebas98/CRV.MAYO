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
<h2>Registro Vigilante</h2>
</div>

<div class="justify-content-center text-center text-white">
    <form class="p-3 row <nav class=" style="background-color: #003566;" method="post">

        <div class="form-group col-md-4 ">

            <label for="codigo_vigilante">Código vigilante:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-code"></i>
                    </span>
                </div>

                <input type="integer" class="form-control" id="codigo_vigilante" name="registroCodigo"
                    placeholder="Ingrese Código">

            </div>

        </div>

        <div class="form-group col-md-4">
            <label for="nombre_vigilante">Nombres:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="nombre_vigilante" name="registroNombre"
                    placeholder="Ingrese nombres">
            </div>
        </div>

        <div class="form-group col-md-4">
            <label for="apellido_vigilante">Apellidos:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="apellido_vigilante" name="registroApellido"
                    placeholder="Ingrese apellidos">
            </div>
        </div>


        <div class="form-group col-md-4">
            <label for="hora_entrada">Hora de entrada:</label>
            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-clock"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="hora_entrada" name="registroHoraentrada"
                    placeholder="Ingrese hora">

            </div>
        </div>

        <div class="form-group col-md-4">
            <label for="hora_salida">Hora de salida:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-clock"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="hora_salida" name="registroHorasalida"
                    placeholder="Ingrese hora">

            </div>
        </div>

        <div class="form-group col-md-4">
            <label for="fecha">Fecha:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                </div>
                <input type="date" class="form-control" id="fecha" name="registroFecha" placeholder="ingrese fecha">
            </div>
        </div>



        <?php 

        $registro =  ControladorFormularioVigilante::ctrRegistroVigilante();

        if($registro == "ok"){

            echo '<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
            </script>';

            echo '<div class="alert alert-success">La información ha sido registrada</div>';
        }
        ?>

        <button type="submit" class="btn btn-primary btn-block" >Registrar</button>
        
    </form>
</div>