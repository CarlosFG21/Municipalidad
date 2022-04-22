<?php

include("../clases/Planilla.php");
//include("../db/Conexion.php");
include("../clases/Usuario.php");

$planilla = new Planilla();

$idempleado = $_POST['idempleado'];
$mes= $_POST['mes'];
$anio= $_POST['anio'];
$salario= $_POST['salario'];
$bonificacion= $_POST['bonificacion'];
$otros= $_POST['otros'];
$igss= $_POST['igss'];
$plan= $_POST['plan'];
$fianza= $_POST['fianza'];
$judicial= $_POST['judicial'];
$timbre= $_POST['timbre'];
$dietas= $_POST['dietas'];
$isrdieta = $_POST['isr_dietas'];
$sisr= $_POST['salario_isr'];
$intotal= $_POST['ingreso_total'];
$totald= $_POST['total_descuento'];
$suedor= $_POST['sueldo_recibido'];
session_start();
$usuario=$_SESSION['usuario'];
$idu=$usuario->getidUsuario();

//if(isset($_POST["btnGuardarPlanilla"])){

    $planilla->planillaEspecifico($idempleado,$mes,$anio,$salario,$bonificacion,$otros,$igss,$plan,$fianza,
    $judicial,$timbre,$dietas,$isrdieta,$sisr,$intotal,$totald,$suedor,$idu);

    //header("Location: ../vistas/planilla_ingresar.php");

//}


?>