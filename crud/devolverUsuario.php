<?php

include("../clases/Usuario.php");

$usuario = new Usuario();

$id = $_REQUEST['id'];

$usuario->devolverUsuario($id);

header("Location: ../vistas/usuario.php");


?>