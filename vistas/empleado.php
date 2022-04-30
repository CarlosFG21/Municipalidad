<?php

include("layout/header.php");

?>

<title>Municipalidad | Gualán</title>

<?php

include("layout/nav.php");

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Empleados</h1>
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
              <a type="submit" class="btn btn btn-success" href="empleado_ingresar.php"> <i class="nav-icon fas fa-plus"> Ingresar empleado</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dpi</th>
                    <th>Nit</th>
                    
                    <th>Cargo</th>
                    <th>Renglon</th>
                    
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                    $empleado = new Empleado();
                    $resultado = $empleado->mostraEmpleados();
                    for($i=0; $i<sizeof($resultado); $i++){
                     echo "<tr>";
                     
                     $id = $resultado[$i]->getidEmpleado();
                     $nombre = $resultado[$i]->getNombre();
                     $apellido = $resultado[$i]->getApellido();
                     $dpi = $resultado[$i]->getDpi();
                     $nit = $resultado[$i]->getNit();
                     $departamento = $resultado[$i]->getNombremu();
                     $cargo = $resultado[$i]->getNombrecar();
                     $renglon = $resultado[$i]->getNombrere();
                     $estado = $resultado[$i]->getEstado();
                     $fecha = $resultado[$i]->getFecha_nacimiento();
                     
                     echo "
                      
                      <td>$id</td>
                      <td>$nombre</td>
                      <td>$apellido</td>
                      <td>$dpi</td>
                      <td>$nit</td>    
                      <td>$cargo</td>
                      <td>$renglon</td>
                      
                      ";

                     /* $time = strtotime($fecha);
                      if(date('m-d')==date('m-d',$time)){
                        echo "<td><span class='badge bg-primary'>Cumpliendo años</span></td>";
                      }else{
                        echo "<td><span class='badge bg-warning'></span></td>";
                      }*/

                      if($estado==1){

                        echo "<td><h4><span class='badge bg-success'>Activo</span></h4></td>";

                      }else{
                        echo "<td><h4><span class='badge bg-danger'>Inactivo</span></h4></td>";
                      }

                      echo "<td>
                      <a type='submit' href='empleado_editar.php?id=$id' class='btn btn-warning'>
                      <i class='fa fa-edit'></i>
                      </a>"; 

                      if($estado==1){
                        echo"<a type='submit' class='btn btn-success'  href='' data-toggle='modal' data-target='#modaleliminarempleado$id'>
                        <i class='fas fa-trash'></i>
                        </a>"; 
                        }else{
                          //Imprimimo botón de reactivar
                          echo"<a type='submit' class='btn btn-danger' id='btnReactivarEmpleado' href='../crud/devolverEmpleado.php?id=$id'>
                        <i class='fa fa-share-square'></i>
                        </a>"; 
                        }
                        echo "<a type='submit' href='empleado_vista.php?id=$id'class='btn bg-gradient-primary'>
                        <i class='fas fa-eye'></i> 
                        </a></td>";

                     echo "</tr>";

                     include('modal_empleado_eliminar.php');  

                    }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dpi</th>
                    <th>Nit</th>
                    
                    <th>Cargo</th>
                    <th>Renglon</th>
                    
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


<?php

include("layout/footer.php");

?>