<?php

include("../clases/Renglon.php");
include("../db/Conexion.php");

$renglon = new Renglon();
$id = $_REQUEST['id'];

$renglon->devolverRenglon($id);
header("Location: ../vistas/renglon.php");

?>