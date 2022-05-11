<?php

include("../clases/Planilla.php");
include("../clases/Usuario.php");

$planilla = new Planilla();
$mes = $_POST['mes'];
$anio =  $_POST['anio'];
session_start();
$usuario=$_SESSION['usuario'];
$idu=$usuario->getidUsuario();
$idempleado = $_POST['lista1'];

if(isset($_POST['btnGuardarPlanilla'])){

    if($planilla->validarPlanillaEspecifica($idempleado,$mes,$anio)==0){
    $planilla->planillaEspecifica($mes,$anio,$idu,$idempleado);
    header("Location: ../vistas/planilla_ingresar.php");
    }else{
        header("Location: ../vistas/planilla_ingresar.php?mensaje=existe");
    }
    
}


?>