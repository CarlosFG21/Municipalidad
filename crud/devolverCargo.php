<?php

include("../clases/Cargo.php");
include("../db/Conexion.php");

$cargo = new Cargo();
$id = $_REQUEST['id'];
$cargo->devolverCargo($id);

header("Location: ../vistas/cargo.php");


?>