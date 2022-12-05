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
    <h2>Egreso de vehiculos C.T.E</h2>
</div>


<div class="justify-content-center  text-center text-white">
    <form class="p-3 row <nav class=" style="background-color: #001D3D;" method="post">

        <div class="form-group col-md-3">
            <label for="no_tramite">No. Trámite:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-sort-numeric-up-alt"></i>
                    </span>
                </div>
                <input type="number" class="form-control" id="no_tramite" name="registroTramite" placeholder="Ingrese No. proceso" required [(ngModel)]="producto.noproceso" #noproceso="ngModel" disable="true">
               
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="no_orden">No. de Orden:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-sort-numeric-up"></i>
                    </span>
                </div>
                <input type="integer" class="form-control" id="orden" name="registroOrden" placeholder="Ingrese No. Orden" required [(ngModel)]="producto.noOrden" #noOrden="ngModel" disable="true">
                
            </div>
        </div>


        <div class="form-group col-md-3">
            <label for="propietario">Propietario:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-male"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="propietario" name="registroPropietario" placeholder="Ingrese propietario" required [(ngModel)]="producto.propietario" #propietario="ngModel" disable="true">
                
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
                    <input type="number" class="form-control" id="placa" name="registroPlaca" placeholder="Ingrese placa" required [(ngModel)]="producto.nombre" #placa="ngModel" disable="true">
                    
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="motor">Motor:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                    <input type="text" required maxlength="2" class="form-control" id="motor" name="registroMotor" pattern="^[a-zA-Z0-9_.-]*$">
                   
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="tonelaje">Tonelaje:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                    <input type="text" class="form-control" id="tonelaje">                    
            </div>
        </div>


        <div class="form-group col-md-3">
            <label for="casillero">Casillero:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="casillero" name="registroCasillero" placeholder="Ingrese casillero" required [(ngModel)]="producto.casillero" #placa="ngModel" disable="true">
                
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="alfombras">Alfombras:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="alfombras" name="registroAlfombras" placeholder="Ingrese Alfombras" required [(ngModel)]="producto.alfombras" #placa="ngModel" disable="true">
                
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-calendar"></i>
                    </span>
                </div>
                <input type="date" class="form-control" id="fecha_ingreso" name="registroFecha" placeholder="Ingrese Fecha de Ingreso" required [(ngModel)]="producto.fechai" #placa="ngModel" disable="true">
                
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="no_identificacion">No. Identificación:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-id-card"></i>
                    </span>
                </div>
                <input type="integer" class="form-control" id="no_identificacion" name="registroIdentificacion" placeholder="Ingrese No. Identificación" required [(ngModel)]="producto.identificacion" #placa="ngModel" disable="true">
                
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="nombres_ciudadano">Nombres del Ciudadano:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-file-signature"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="nombres_ciudadano" name="registroNombre" placeholder="Ingrese Nombres" required [(ngModel)]="producto.nombres" #placa="ngModel" disable="true">
                
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="telefono">Teléfono:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-phone"></i>
                    </span>
                </div>
                <input type="integer" class="form-control" id="telefono" name="registroTelefono" placeholder="Ingrese Teléfono" required [(ngModel)]="producto.telefono" #placa="ngModel" disable="true">
                
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="direccion">Dirección:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
<i class="fas fa-address-book"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="direccion" name="registroDireccion" placeholder="Ingrese dirección" required [(ngModel)]="producto.direccion" #placa="ngModel" disable="true">
                
            </div>
        </div>

        <div class="form-group col-md-3">
            <label for="correo">Correo electrónico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-at"></i>
                    </span>
                </div>
                <input type="email" class="form-control" id="correo" name="registroCorreo" placeholder="Ingrese e-mail" required [(ngModel)]="producto.email" #placa="ngModel" disable="true">
            
            </div>
        </div>

        <div class="text-center col-12">
            <h2>Autorizado por:</h2>
        </div>

        <div class="p-3 row justify-content-center  text-center text-white" style="background-color: #001D3D">

            <div class="form-group col-md-3">
                <label for="no_identificacion1">No. Identificación:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-id-card"></i>
                        </span>
                    </div>
                    <input type="integer" class="form-control" id="no_identificacion1" name="registroIdentificacion1" placeholder="Ingrese No. Identificación" required [(ngModel)]="producto.noidentificacion" #placa="ngModel" disable="true">
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="nombres_ciudadano1">Nombres del Ciudadano:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-file-signature"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="nombres_ciudadano1" name="registroNombre1" placeholder="Ingrese Nombres" pattern=".{6,}" title="Six or more characters">
                
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="telefono1">Teléfono:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-phone"></i>
                        </span>
                    </div>
                    <input type="integer" class="form-control" id="telefono1" name="registroTelefono1" placeholder="Ingrese Teléfono" required [(ngModel)]="producto.telf" #placa="ngModel" disable="true">
                    
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="direccion1">Dirección:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-address-book"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="direccion1" name="registroDireccion1" placeholder="Ingrese Direccion" required [(ngModel)]="producto.dir" #placa="ngModel" disable="true">
                   
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="correo1">Correo electrónico:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-at"></i>
</span>
                    </div>
                    <input type="email" class="form-control" id="correo1" name="registroCorreo1" placeholder="Ingrese e-mail" required [(ngModel)]="producto.correo" #placa="ngModel" disable="true">
                    
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="autoriza">Autoriza:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="autoriza" name="registroAutoriza" placeholder="Ingrese quien auto+" required [(ngModel)]="producto.autorizacion" #placa="ngModel" disable="true">
                    
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
                    <input type="text" class="form-control" id="observaciones" name="registroObservaciones" placeholder="Ingrese observaciones" required [(ngModel)]="producto.observaciones" #placa="ngModel" disable="true">
                    >
                </div>
            </div>


        </div>

        <?php

        $registro = ControladorFormularioEgreso::ctrRegistroEgreso();

        if ($registro == "ok") {

            echo '<script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        </script>';

            echo '<div class="alert alert-success">La información ha sido registrada</div>';
        }


        ?>
        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
    </form>
</div>