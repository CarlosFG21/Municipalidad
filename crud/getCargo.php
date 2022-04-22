<?php 
    require('../db/Conexion.php');
    $conexion = new Conexion();
   
    $conexion->conectar();
    echo "entro a cargos";

    $id_dependencia = $_POST['id_dependencia'];

    $queryM = "SELECT id_cargo, nombre FROM cargo where id_dependencia = '
    $id_dependencia' ORDER BY nombre ASC   ";

    $ejecutar = mysqli_query($conexion->db, $queryM);


    $html = "<option value='0'>Seleccione un cargo</option>";
    echo $html;

 

    while($row = mysqli_fetch_array($ejecutar)){
 
       echo $html = "<option value=".$row[0].">".$row[1]."</option>";

    }

?>