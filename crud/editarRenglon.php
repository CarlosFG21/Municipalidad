<?php

include("../clases/Renglon.php");
include("../db/Conexion.php");

$renglon = new Renglon();
$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

if(isset($_POST["btnEditarRenglon"])){

    $renglon->editarRenglon($nombre,$descripcion,$id);

    header("Location: ../vistas/renglon.php");

}

?>