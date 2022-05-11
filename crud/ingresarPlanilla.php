<?php

include("../clases/Planilla.php");
//include("../db/Conexion.php");
include("../clases/Usuario.php");

$planilla = new Planilla();

$idempleado = $_POST['lista1'];
$mes= $_POST['mes'];
$anio= $_POST['anio'];
session_start();
$usuario=$_SESSION['usuario'];
$idu=$usuario->getidUsuario();

//if(isset($_POST["btnGuardarPlanilla"])){

    /*$planilla->planillaEspecifico($idempleado,$mes,$anio,$salario,$bonificacion,$otros,$igss,$plan,$fianza,
    $judicial,$timbre,$dietas,$isrdieta,$sisr,$intotal,$totald,$suedor,$idu);*/

    //header("Location: ../vistas/planilla_ingresar.php");

//}


?>