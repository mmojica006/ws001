<?php

require_once "models/enlaces.php";
require_once "models/ingreso.php";

require_once "controllers/plantilla.controlador.php";
require_once "controllers/enlaces.php";
require_once "controllers/ingreso.php";




$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
