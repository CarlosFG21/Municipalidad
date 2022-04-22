<?php

include("../clases/Dependencia.php");
include("../db/Conexion.php");


$dependencia = new Dependencia();
$id = $_REQUEST['id'];

$dependencia->eliminarDependencia($id);

header("Location: ../vistas/dependencia.php");



?>