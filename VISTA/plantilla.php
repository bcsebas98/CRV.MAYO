<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prototipo C.T.E</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    * {
        margin: 0px;
        padding: 0px;
    }

    #header {
        margin: auto;
        width: 120px;
        font-family: Arial, Helvetica, sans-serif;
        z-index: 1
    }

    ul,
    ol {
        list-style: outside none none;
        z-index: 1
    }

    .nav1>li {
        float: left;
        z-index: 1
    }

    .nav1 li a {
        background-color: #A6ACAF;
        color: #001D3D;
        text-decoration: none;
        padding: 10px 12px;
        display: block;
        z-index: 1
    }

    .nav1 li a:hover {
        background-color: #3498DB;
        z-index: 1
    }

    .nav1 li ul {
        display: none;
        position: absolute;
        min-width: 120px;
        z-index: 1
    }

    .nav1 li:hover>ul {
        display: block;
        z-index: 1
    }

    .nav1 li ul li {
        position: relative;
        z-index: 1
    }

    .nav1 li ul li ul {
        right: -150px;
        top: 0px;
        z-index: 1
    }

    */
    </style>


    <!-- Latest compiled fontawesome -->
    <script src="https://kit.fontawesome.com/32a65358fa.js" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('#entrar').click(function() {
            grecaptcha.ready(function() {
                grecaptcha.execute('6Le_U_ofAAAAAMu3USRK9j91_0SmOsr-gTk8LdPP', {
                        action: 'validarUsuario'
                    })
                    .then(function(token) {
                        $('#form-login').prepend(
                            '<input type="hidden" name="token" value="' + token + '">');
                        $('#form-login').prepend(
                            '<input type="hidden" name="action" value="validarUsuario">'
                        );
                        $('#form-login').submit();
                    });
            });

        })
    })
    </script>

</head>


<body>

    <!--- LOGO -->
    <div class="<nav class=" style="background-color: #001D3D">
        <a href="index.php?pagina=inicio">
            <img class="header__logo mx-auto d-block" src="VISTA/img/3.png" style="width:15%" alt="Logotipo">
        </a>
    </div>

    <!--- BOTONES -->
    <div class="container-fluid <nav class=" style="background-color: #FFD100;">

        <div class="container font color: #ffffff ">

            <ul class="nav nav-justified py-2 nav-pills">

                <?php if (isset($_GET["pagina"])): ?>

                <?php if ($_GET["pagina"] == "inicio"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>
                <?php endif ?>


                <?php if ($_GET["pagina"] == "ingreso"): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>
                <?php endif ?>


                <?php if ($_GET["pagina"] == "registro"): ?>
                <li class="nav-item ">
                    <a class="nav-link active text-white " href="index.php?pagina=registro">Registro</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                </li>
                <?php endif ?>


                <?php if ($_GET["pagina"] == "#"): ?>
                <div id="header">
                    <ul class="nav1">
                        <li><a href="" style="background-color: #FFD100">Servicios</a>
                            <ul>
                                <li><a href="">C.R.V</a>
                                    <ul>
                                        <li><a href="index.php?pagina=ingresoalpatio">Ingreso al Patio</a></li>
                                        <li><a href="index.php?pagina=ingresosistema">Ingreso al Sistema</a></li>
                                        <li><a href="index.php?pagina=egreso">Egreso</a></li>
                                        <li><a href="index.php?pagina=novedades">Novedades</a></li>
                                        <li><a href="index.php?pagina=vigilante">Registro Vigilante</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Juridico</a></li>
                                <li><a href="">O.I.A.T</a></li>
                                <li><a href="">CRUD</a>
                                    <ul>
                                        <li><a href="index.php?pagina=tablaingresoPatio">Crud Ingreso al Patio</a></li>
                                        <li><a href="index.php?pagina=tablaregistro">Crud Registro</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php else: ?>

                <div id="header">
                    <ul class="nav1">
                        <li><a href="" style="background-color: #FFD100">Servicios</a>
                            <ul>
                                <li><a href="">C.R.V</a>
                                    <ul>
                                        <li><a href="index.php?pagina=ingresoalpatio">Ingreso al Patio</a></li>
                                        <li><a href="index.php?pagina=ingresosistema">Ingreso al Sistema</a></li>
                                        <li><a href="index.php?pagina=egreso">Egreso</a></li>
                                        <li><a href="index.php?pagina=novedades">Novedades</a></li>
                                        <li><a href="index.php?pagina=vigilante">Registro Vigilante</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Juridico</a></li>
                                <li><a href="">O.I.A.T</a></li>
                                <li><a href="">CRUD</a>
                                    <ul>
                                        <li><a href="index.php?pagina=tablaingresoPatio">Crud Ingreso al Patio</a></li>
                                        <li><a href="index.php?pagina=tablaregistro">Crud Registro</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <?php endif ?>


                <?php if ($_GET["pagina"] == "#"): ?>
                    <div id="header">
                        <ul class="nav1">
                            <li><a href="" style="background-color: #FFD100">▼</a>
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                
                <?php else: ?>
                    <div id="header">
                        <ul class="nav1">
                            <li><a href="" style="background-color: #FFD100">▼</a>
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <?php endif ?>


                <?php else: ?>


                <li class="nav-item">
                    <a class="nav-link active " href="index.php?pagina=registro">Registro </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>

                <div id="header">
                    <ul class="nav1">
                        <li><a href=""  style="background-color: #FFD100">Servicios</a>
                            <ul>
                                <li><a href="">C.R.V</a>
                                    <ul>
                                        <li><a href="index.php?pagina=ingresoalpatio">Ingreso al Patio</a></li>
                                        <li><a href="index.php?pagina=ingresosistema">Ingreso al Sistema</a></li>
                                        <li><a href="index.php?pagina=egreso">Egreso</a></li>
                                        <li><a href="index.php?pagina=novedades">Novedades</a></li>
                                        <li><a href="index.php?pagina=vigilante">Registro Vigilante</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Juridico</a></li>
                                <li><a href="">O.I.A.T</a></li>
                                <li><a href="">CRUD</a></li>
                                <ul>
                                    <li><a href="index.php?pagina=tablaingresoPatio">Crud Ingreso al Patio</a></li>
                                    <li><a href="index.php?pagina=tablaregistro">Crud Registro</a></li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div id="header">
                        <ul class="nav1">
                            <li><a href="" style="background-color: #FFD100">▼</a>
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                <?php endif ?>

            </ul>

        </div>

    </div>
    <!------- Contenido   ---------->
    <!--<div class="container-fluid"> -->
    <div class="container-fluid">

        <div class="container py-5">

            <?php

				#ISSET: isset() Determina si una variable está definida y no es NULL

                    if (isset($_GET["pagina"])) {

                       if ($_GET["pagina"] == "registro" ||
                           $_GET["pagina"] == "ingreso" ||
                           $_GET["pagina"] == "inicio" ||
                           $_GET["pagina"] == "ingresoalpatio" ||
                           $_GET["pagina"] == "egreso" ||
                           $_GET["pagina"] == "novedades" ||
                           $_GET["pagina"] == "ingresosistema" ||
                           $_GET["pagina"] == "vigilante" ||
                           $_GET["pagina"] == "editarRegistros" ||
                           $_GET["pagina"] == "tablaingresoPatio" ||
                           $_GET["pagina"] == "tablaregistro" ||
                           $_GET["pagina"] == "salir") {

                          include "paginas/" . $_GET["pagina"] . ".php";

                  }
                  else {

                      include "paginas/error404.php";
                  }

              }
              else {

               include "paginas/inicio.php";

           }

           ?>

        </div>

    </div>
</body>

</html>