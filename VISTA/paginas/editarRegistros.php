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
                <input type="text" class="form-control" value="<?php echo $usuario["codigo_inst"];?>"
                    placeholder="Escriba el Código Institucional" id="codigo_inst" name="actualizarCodigoinst">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["nombre"];?>"
                    placeholder="Escriba el nombre" id="nombre" name="actualizarNombre">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["apellido"];?>"
                    placeholder="Escriba el apellido" id="apellido" name="actualizarApellido">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <input type="email" class="form-control" value="<?php echo $usuario["correo"];?>"
                    placeholder="Escriba el correo" id="correo" name="actualizarCorreo">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-mobile"></i>
                    </span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["telefono"];?>"
                    placeholder="Escriba el telefono" id="telefono" name="actualizarTelefono">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-city"></i>
                    </span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["ciudad"];?>"
                    placeholder="Escriba la ciudad" id="ciudad" name="actualizarCiudad">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-building"></i>
                    </span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["departamento"];?>"
                    placeholder="Escriba el departamento" id="departamento" name="actualizarDepartamento">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-address-book"></i>
                    </span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["cargo"];?>"
                    placeholder="Escriba el cargo" id="cargo" name="actualizarCargo">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control" placeholder="Escriba la contraseña" id="pwd"
                    name="actualizarPassword">
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