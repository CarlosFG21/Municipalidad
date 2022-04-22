<?php

include("../clases/Dependencia.php");
include("../db/Conexion.php");


if(isset($_POST["btnEditarDependencia"])){

    $dependencia = new Dependencia();

    $id=$_REQUEST['id'];
    $nombree = $_POST['dependencia'];
    $codigoe = $_POST['codigo'];
    $descripcione = $_POST['descripcion'];

    $dependencia->editarDependencia($nombree,$codigoe,$descripcione,$id);

    header("Location: ../vistas/dependencia.php");

}


?>