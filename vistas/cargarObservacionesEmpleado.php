<?php
   include("../clases/Empleado.php");
   include("../db/Conexion.php");
   include("../clases/Observacion.php");
                   
?>

<script type="text/javascript">

function ConfirmarDelete(){

  var respuesta = confirm("¿Estás seguro que deseas eliminar la observacion?");
  if(respuesta==true){
    return true;
  }else{
    return false;
  }

}

function ConfirmarVuelta(){

var respuesta = confirm("¿Estás seguro que deseas reactivar la observacion?");
if(respuesta==true){
  return true;
}else{
  return false;
}

}


</script>

<!--CARGAMOS LA TABLA CON RESULTADOS DE DETALLES DE LAS OBSERVACIONES-->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        
        <?php
            $detalleObservacionContar = new Observacion();
            $idConteo = $_REQUEST['id'];
            $res = $detalleObservacionContar->obtenerObservacionEmpleado($idConteo);
            $tamano = sizeof($res);
            echo "<h1>Observaciones encontradas: $tamano</h1>";
        ?>
        

        </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
        

          <div class="card">
              <div class="card-header">
              
              <?php
               $idEmpleadoNuevaObservacion = $_REQUEST['id'];
          
                 echo "<a type='submit' class='btn btn-success' href='detalle_observacion_ingresar.php?id=$idEmpleadoNuevaObservacion'><i class='nav-icon fas fa-plus'> Agregar observacion</i></a>";
             
             ?>    
             
            <!-- <a type="submit" class="btn btn-primary" href="#" target="_blank">Reporte</a>-->
              </div>

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tipo de observacion</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
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

                    echo "<td><a type='submit' href='detalle_observacion_editar.php?id=$id&idempleado=$idEmpleadoNuevaObservacion' class='btn btn-warning'>
                    <i class='fa fa-edit'></i>
                    </a>";

                    if($estado==1){
                    echo"<a type='submit' class='btn btn-success' id='btnEliminarObservacion' href='../crud/eliminarObservacion.php?id=$id' onclick='return ConfirmarDelete()'>
                    <i class='fas fa-trash'></i>
                    </a>"; 
                    }else{
                      //Imprimimo botón de reactivar
                      echo"<a type='submit' class='btn btn-danger' id='btnReactivarObservacion' href='../crud/devolverObservacion.php?id=$id' onclick='return ConfirmarVuelta()'>
                    <i class='fa fa-share-square'></i>
                    </a>"; 
                    }
                    echo"<a type='submit' href='detalle_observacion_vista.php?id=$id&idempleadon=$idEmpleadoNuevaObservacion'class='btn bg-gradient-primary'>
                    <i class='fas fa-eye'></i> 
                    </a></td>";



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
                  <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar ",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



