<?php

include("../clases/Usuario.php");

$usuario = new Usuario();
$id = $_REQUEST['id'];

$usuario->eliminarUsuario($id);

header("Location: ../vistas/usuario.php");


?>