<?php

include("../clases/Pago.php");
include("../clases/Usuario.php");


$forma = $_POST['forma'];
$descripcion =  $_POST['descripcion'];
$idPlanilla = $_POST['cbPlanilla'];
session_start();
$usuario=$_SESSION['usuario'];
$idu=$usuario->getidUsuario();

$pago = new Pago();

if(isset($_POST["btnGuardarPago"])){

    if($pago->ValidarPago($idPlanilla)==0){

    $pago->Guardarpago($forma,$descripcion,$idPlanilla,$idu);

    header("Location: ../vistas/pago_ingresar.php");

    }else{

        header("Location: ../vistas/pago_ingresar.php?mensaje=existe");
    
    }

}


?>