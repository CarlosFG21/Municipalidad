<?php

include("../clases/Observacion.php");
include("../db/Conexion.php");


$id_empleado = $_POST['id'];
$tipo =  $_POST['cbTipo'];
$descripcion = $_POST['descripcion'];
$observacion = new Observacion();


if(isset($_POST["btnGuardarObservacion"])){

    $observacion->observacionIngresar($descripcion,$id_empleado,$tipo);
    header("Location: ../vistas/observacion.php");

}


?>