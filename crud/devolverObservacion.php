<?php

include("../clases/Observacion.php");
include("../db/Conexion.php");

$observacion = new Observacion();
$id = $_REQUEST['id'];
$observacion->reactivarObservacion($id);
header("Location: ../vistas/observacion.php");


?>