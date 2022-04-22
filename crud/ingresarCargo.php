<?php

include("../clases/Cargo.php");
include("../db/Conexion.php");


$dependencia = $_POST['cbDependencia'];
$nombre = $_POST['cargo'];
$descripcion = $_POST['descripcion'];

$cargo = new Cargo();

if(isset($_POST["btnGuardarCargo"])){

    if($cargo->validacionCargo($nombre,$dependencia)==0){
    
    $cargo->guardarCargo($nombre,$descripcion,$dependencia);

    header("Location: ../vistas/cargo.php");

   }else{
     
    header("Location: ../vistas/cargo_ingresar.php?mensaje=existe");

   }

}


?>