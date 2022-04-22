<?php

include("../clases/Dependencia.php");
include("../db/Conexion.php");

$nombre = $_POST['dependencia'];
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];

$dependencia = new Dependencia();

if(isset($_POST["btnGuardarDependencia"])){

if($dependencia->validaDependencia($nombre)==0){

$dependencia->guardarDependencia($nombre,$codigo,$descripcion);

header("Location: ../vistas/dependencia.php");

}else{

    header("Location: ../vistas/dependencia_ingresar.php?mensaje=existe");
}

}

?>