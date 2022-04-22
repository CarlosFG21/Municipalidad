<?php

include("../clases/Observacion.php");
include("../db/Conexion.php");

$observacion = new Observacion();

$id = $_REQUEST['id'];
$tipo = $_POST['cbTipo'];
$descripcion = $_POST['descripcion'];

if(isset($_POST["btnEditarObservacion"])){

    $observacion->editarObservacion($tipo,$descripcion,$id);
    header("Location: ../vistas/observacion.php");

}


?>