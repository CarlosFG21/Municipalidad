<?php

include("../clases/Cargo.php");
include("../db/Conexion.php");

$id=$_REQUEST['id'];
$cargo = new Cargo();

$cargo->eliminarCargo($id);
header("Location: ../vistas/cargo.php");

?>