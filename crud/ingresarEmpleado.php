<?php

include("../clases/Empleado.php");
//include("../db/Conexion.php");
include("../clases/Usuario.php");

//obtencion de datos del empleado 
$nombre = $_POST['nombre'];
$apellido =  $_POST['apellido'];
$dpi =  $_POST['dpi'];
$nit =  $_POST['nit'];
$telefono =  $_POST['telefono'];
$municipio  = $_POST['cbMunicipio'];
$fechn =  $_POST['fecha_n'];
$afigss = $_POST['igss'];
$cuentab = $_POST['cuenta'];
$expediente =  $_POST['no_expediente'];
$renglon = $_POST['cbRenglon'];
$cargo =  $_POST['cbCargo'];
$fechai=  $_POST['fecha_i'];
$pago =   $_POST['cbPago'];
$salario = $_POST['salario'];
$boni =   $_POST['bonificacion'];
$otros =   $_POST['otros'];
$isrs =   $_POST['isrsalario'];
$isrd =  $_POST['dietas'];
$judicial = $_POST['judicial'];

$igssd=0;
if(isset($_POST['igsss'])){
    $igssd = 1;
}


//---------------------------
$plan=0;
if(isset($_POST['plan'])){
    $plan = 1;
}


//--------------------------
$fianza=0;
if(isset($_POST['fianza'])){
    $fianza = 1;
}


//-----------------------------
/*$judicial =0;
if(isset($_POST['judicial'])){
    $judicial= 1;
}*/


//---------------------------------
$timbre =0;
if(isset($_POST['timbre'])){
    $timbre= 1;
}

$isrdietasd =0;
if(isset($_POST['isrdietas'])){
    $isrdietasd= 1;
}


//obtencion de usuario que esta ingresando el datos 
session_start();
$usuario=$_SESSION['usuario'];
$idu=$usuario->getidUsuario();

$empleado = new Empleado();

if(isset($_POST["btnGuardarEmpleado"])){

    if($empleado->validarEmpleado($nombre,$apellido,$nit,$dpi,$afigss,$cuentab,$expediente,$cargo)==0){

    $empleado->guardarEmpleado($nombre,$apellido,$dpi,$nit,$fechn,$cuentab,$afigss,$expediente,$pago,$telefono,$salario,$otros,$boni,$isrs,$isrd,$fechai,$municipio,$renglon,$cargo,$idu,$judicial,$igssd,$fianza,$timbre,$plan,$isrdietasd);

    header("Location: ../vistas/empleado.php");

    }else{

        header("Location: ../vistas/empleado_ingresar.php?mensaje=existe");

    }

}



?>