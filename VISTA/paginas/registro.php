<div class="d-flex justify-content-center text-center text-white">
    <form class="p-3 row <nav class=" style="background-color: #001D3D;" method="post">
        
            <div class="form-group col-md-3 ">
                <label for="codigo_inst">Codigo Institucional:</label>

                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-id-card"></i>
                        </span>
                    </div>

                    <input type="text" class="form-control" id="codigo_inst" name="registroCodigo" placeholder="Código de empleado">
                </div>
            </div>
           
            <div class="form-group col-md-3 ">
                <label for="cedula">Cédula:</label>

                <div class="input-group">

                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-id-card"></i>
                        </span>
                    </div>

                    <input type="integer" class="form-control" id="cedula" name="registroCedula" placeholder="Ingrese su cédula">
                </div>
            </div>


            <div class="form-group col-md-3 ">
                <label for="nombre">Nombre:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-file-signature"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="nombre" name="registroNombre" placeholder="Ingrese su nombre">
                </div>
            </div>

            <div class="form-group col-md-3 ">
                <label for="apellido">Apellido:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-file-signature"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="apellido" name="registroApellido" placeholder="Ingrese su apellido">
                </div>
            </div>


            <div class="form-group col-md-3 ">
                <label for="correo">Correo electrónico:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control" id="correo" name="registroCorreo" placeholder="Ingrese su correo">
                </div>
            </div>

            <div class="form-group col-md-3 ">
                <label for="telefono">Teléfono:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-mobile"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="telefono" name="registroTelefono" placeholder="Ingrese su teléfono">
                </div>
            </div>

            <div class="form-group col-md-3 ">
                <label for="ciudad">Ciudad laboral:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-city"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="ciudad" name="registroCiudad" placeholder="Ingrese su ciudad">
                </div>
            </div>

            <div class="form-group col-md-3 ">
                <label for="departamento">Departamento Laboral:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-building"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="departamento" name="registroDepartamento" placeholder="Ingrese su departamento">

                </div>
            </div>

            <div class="form-group col-md-4 ">
                <label for="cargo">Cargo:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-address-book"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="cargo" name="registroCargo" placeholder="Ingrese su cargo">
                </div>
            </div>

            <div class="form-group col-md-4 ">
                <label for="password">Contraseña:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" id="password" name="registroPassword" placeholder="Ingrese su contraseña">
                </div>
            </div>

            <div class="form-group col-md-4 ">
                <label for="password1">Confirmar contraseña:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" id="password1" name="registroPassword1" placeholder="Confirme su contraseña">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
            <?php

            $registro = ControladorFormulario::ctrRegistro();
            

            if ($registro == "ok") {

                echo '<script>
				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}
			</script>';

                echo '<div class="alert alert-success" role="alert">¡El usuario ha sido registrado con exito!</div>';
            }


            ?>

            

    </form>
</div>