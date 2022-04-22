<?php

include("../clases/Empleado.php");
include("../db/Conexion.php");

$id = $_REQUEST['id'];
date_default_timezone_set('America/Guatemala');
$fecha = date('Y-m-d'); 
$hora = time();
$horaReal = date("H:i:s",$hora);

$empleado = new Empleado();
$empleado->devolverEmpleado($id,$fecha);
header("Location: ../vistas/empleado.php");


?>