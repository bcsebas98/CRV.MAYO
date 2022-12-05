
<?php
require_once "CONTROLADOR/plantilla.controlador.php";
require_once "CONTROLADOR/formulario.controlador.php";
require_once "CONTROLADOR/formulario.controlador.ingreso.php";
require_once "CONTROLADOR/formulario.controlador.egreso.php";
require_once "CONTROLADOR/formulario.controlador.novedades.php";
require_once "CONTROLADOR/formulario.controlador.ingresosistema.php";
require_once "CONTROLADOR/formulario.controlador.vigilante.php";
require_once "MODELO/formularios.modelo.php";
require_once "MODELO/formularios.modelo.ingreso.php";
require_once "MODELO/formularios.modelo.egreso.php";
require_once "MODELO/formularios.modelo.novedades.php";
require_once "MODELO/formularios.modelo.ingresosistema.php";
require_once "MODELO/formularios.modelo.vigilante.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();

