<?php

include("../clases/Empleado.php");
include("../db/Conexion.php");

$id = $_REQUEST['id'];
$fecha = $_POST['fecham']; 
$empleado = new Empleado();

if(isset($_POST["btnEliminarE"])){

$empleado->eliminarEmpleado($id,$fecha);

header("Location: ../vistas/empleado.php");

}

?>