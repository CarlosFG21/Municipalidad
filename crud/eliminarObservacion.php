<?php

include("../clases/Observacion.php");
include("../db/Conexion.php");

$observacion = new Observacion();
$id = $_REQUEST['id'];

$observacion-> eliminarObservacion($id);
header("Location: ../vistas/observacion.php");


?>