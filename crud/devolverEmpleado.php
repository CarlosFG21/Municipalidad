<?php

include("../clases/Empleado.php");
include("../db/Conexion.php");

$id = $_REQUEST['id'];
$fecha = $_POST['fechamm'];
$empleado = new Empleado();
if(isset($_POST["btnDevolverE"])){

$empleado->devolverEmpleado($id,$fecha);
header("Location: ../vistas/empleado.php");
}

?>