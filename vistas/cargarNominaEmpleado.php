<?php
   include("../clases/Empleado.php");
   include("../db/Conexion.php");
   include("../clases/Observacion.php");
                   
?>
<div class="">
                 <h3>Observaciones</h3>
                 <hr style="width:75%; height:5px; 
                 width: 30%;
                 display: inline-block;">
                </div>             
<!-- /.card-header -->
<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>ID</th>
      <th>Tipo de observacion</th>
      <th>Descripcion</th>
      <th>Estado</th>
      
    </tr>
    </thead>
    <tbody>
    <?php
    $detalleObservacion = new Observacion();
    $idEmpleadoBuscar = $_REQUEST['id'];
    
    $observacionArray = $detalleObservacion->obtenerObservacionEmpleado($idEmpleadoBuscar);

    for($i=0; $i<sizeof($observacionArray); $i++){

      $id =  $observacionArray[$i]->getidObservacion();
      $tipo = $observacionArray[$i]->getNobservacion();
      $descripcion = $observacionArray[$i]->getDescripcion();
      $estado = $observacionArray[$i]->getEstado();
     


      echo "<tr>";

      echo "
          <td>$id</td>
          <td>$tipo</td>
          <td>$descripcion</td>
          
          
      
      ";

      if($estado==1){
        echo "<td><h4><span class='badge bg-success'>Activo</span></h4></td>";
      }else{
        echo "<td><h4><span class='badge bg-danger'>Inactivo</span></h4></td>";
      }

     
 echo "</tr>";

    }

    ?>
    </tbody>
    <tfoot>
    <tr>
    <th>ID</th>
    <th>Tipo de observacion</th>
    <th>Descripcion</th>
    <th>Estado</th>
    
    </tr>
    </tfoot>
  </table>
  
  <br>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->