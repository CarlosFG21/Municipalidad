<?php

include("../clases/Renglon.php");
include("../db/Conexion.php");

$renglon = new Renglon();
$nombre = $_POST['nombre'];
$descripcion =  $_POST['descripcion'];

if(isset($_POST["btnGuardarRenglon"])){
 
    if($renglon->validarRenglon($nombre)==0){
    $renglon->guardarRenglon($nombre,$descripcion);

    header("Location: ../vistas/renglon.php");

    }else{

        header("Location: ../vistas/renglon_ingresar.php?mensaje=existe");
    }
}

?>