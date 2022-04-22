<?php

include("../clases/Dependencia.php");
include("../db/Conexion.php");

$dependencia = new Dependencia();
$id=$_REQUEST['id'];

$dependencia->reactivarDependencia($id);

header("Location: ../vistas/dependencia.php");


?>