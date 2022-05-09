<?php

include("../clases/Pago.php");
include("../db/Conexion.php");

$pago = new Pago();
$id = $_REQUEST['id'];
$forma = $_POST['forma'];
$descripcion = $_POST['descripcion'];
$fecha  = $_POST['fecha'];


if(isset($_POST["btnEditarPago"])){
    $pago->editarPago($forma,$descripcion,$fecha,$id);
    header("Location: ../vistas/pago.php");
}


?>