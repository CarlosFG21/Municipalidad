<?php

include("../clases/Usuario.php");

if(isset($_POST["btnEditar"])){

    $usuario = new Usuario();

    $id= $_REQUEST['id'];

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nickname = $_POST['usuario'];
    $permiso = $_POST['permiso'];
    $contrasena =  $_POST['contrasena'];
    
    $usuario->editarUsuario($nombre,$apellido,$permiso,$nickname,$contrasena,$id);

    header("Location: ../vistas/usuario.php");

}


?>