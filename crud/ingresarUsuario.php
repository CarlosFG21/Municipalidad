<?php

include("../clases/Usuario.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rol = $_POST['permiso'];
$usuario = $_POST['usuario'];
$contrasenia =  $_POST['contrasena'];

$us = new Usuario();

if(isset($_POST["btnGuardarUsuario"])){

    if($us->validarUsuarioExistente($usuario)==0){

    $us->guardar($nombre,$apellido,$rol,$usuario,$contrasenia);

    header("Location: ../vistas/usuario.php");
}

else{

    header("Location: ../vistas/usuario_ingresar.php?mensaje=existe");

}



}


?>