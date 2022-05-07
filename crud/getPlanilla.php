<?php 
    require('../db/Conexion.php');
    $conexion = new Conexion();
   
    $conexion->conectar();
    echo "entro a municipio";

    $id_empleado = $_POST['id_empleado'];

    $queryM = "SELECT id_planilla, CONCAT(mes,' ',anio) FROM planilla where id_empleado = '
    $id_empleado' ORDER BY mes ASC   ";

    $ejecutar = mysqli_query($conexion->db, $queryM);


    $html = "<option value='0'>Seleccione una planilla</option>";
    echo $html;

 

    while($row = mysqli_fetch_array($ejecutar)){
 
       echo $html = "<option value=".$row[0].">".$row[1]."</option>";

    }

    

?>