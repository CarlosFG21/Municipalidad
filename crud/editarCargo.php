<?php

include("../clases/Cargo.php");
include("../db/Conexion.php");

if(isset($_POST["btnEditarCargo"])){
$cargo = new Cargo();

$id = $_REQUEST['id'];
$nombre = $_POST['cargo'];
$descripcion = $_POST['descripcion'];
$dependencia = $_POST['cbDependencia'];


$cargo->editarCargo($nombre,$descripcion,$dependencia,$id);

header("Location: ../vistas/cargo.php");

}

?>

