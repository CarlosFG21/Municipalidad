<?php

include("../clases/Planilla.php");
//include("../db/Conexion.php");
include("../clases/Usuario.php");

$planilla = new Planilla();

$mes= $_POST['mes'];
$anio= $_POST['anio'];
session_start();
$usuario=$_SESSION['usuario'];
$idu=$usuario->getidUsuario();

if(isset($_POST['btnGenerarPlanilla'])){

    $planilla->planillaMasiva($mes,$anio,$idu);
    if($mes!=NULL){
    header('Location: ../vistas/planilla.php?mensaje=guardar');
    }else{
        header('Location: ../vistas/planilla.php');
    }
    
}


?>