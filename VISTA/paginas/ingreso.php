<head>
    <script src="https://www.google.com/recaptcha/api.js?render=6Le_U_ofAAAAAMu3USRK9j91_0SmOsr-gTk8LdPP"></script>

    <script>
        $(document).ready(function() {
            $('#entrar').click(function() {
                grecaptcha.ready(function() {
                    grecaptcha.execute('6Le_U_ofAAAAAMu3USRK9j91_0SmOsr-gTk8LdPP', {
                            action: 'validarUsuario'
                        })
                        .then(function(token) {
                            $('#form-login').prepend('<input type="hidden" name="token" value="' + token + '">');
                            $('#form-login').prepend('<input type="hidden" name="action" value="validarUsuario">');
                            $('#form-login').submit();
                        });
                });

            })
        })
    </script>
</head>
<?php
    include_once 'MODELO/conexion.php';
    
    //session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: ingresoalpatio.php');
            break;

            case 2:
            header('location: egreso.php');
            break;
            case 3:
            header('location: inicio.php');
            break;

            default:
        }
    }

    if(isset($_POST['registroCorreo']) && isset($_POST['registroPassword'])){
        $username = $_POST['registroCorreo'];
        $password = $_POST['registroPassword'];

        $db = new Conexion();
        $query = $db->conectar()->prepare('SELECT *FROM registro WHERE registroCorreo = :corrreo AND registroPassword = :password');
        $query->execute(['registroCorreo' => $username, 'registroPassword' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[2];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: egreso.php');
                break;

                case 2:
                header('location: inicio.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
        

    }

?>



<div class="d-flex justify-content-center text-center text-white">

    <form class="p-3 row <nav class=" style="background-color: #001D3D;" method="post">


        <div class="form-group col-md-4">

            <label for="correo">Codigo Institucional:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>

                <input type="number" class="form-control" id="codigo_inst" name="registroCodigo" placeholder="Ingrese el Codigo Institucional">

            </div>

        </div>
        <div class="form-group col-md-4">

            <label for="correo">Correo electrónico:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>

                <input type="email" class="form-control" id="correo" name="ingresoCorreo" placeholder="Ingrese Correo">

            </div>

        </div>

        <div class="form-group col-md-4">
            <label for="password">Contraseña:</label>

            <div class="input-group">

                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>

                <input type="password" class="form-control" id="password" name="ingresoPassword" placeholder="Ingrese Contraseña">

            </div>

        </div>


        <?php
        /**
         * Crear objeto no estatico
         */
        $ingreso = new ControladorFormulario();
        /**
         * Aun no se ha creado el metodo ctrlIngreso();
         */
        $ingreso->ctrIngreso();

        ?>

        <button type="submit" class="btn btn-primary btn-block">Ingresar</button>


    </form>

</div>