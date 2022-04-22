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
            <h1>Cargos</h1>
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
              <a type="submit" class="btn btn-success" href="cargo_ingresar.php"> <i class="nav-icon fas fa-plus"> Ingresar cargos</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Cargo</th>
                    <th>Dependencia</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php

                     $cargo = new Cargo();
                     $resultado = $cargo->mostrarCargo();

                     echo "<tr>";

                     for($i=0; $i<sizeof($resultado); $i++){
                          
                          $id = $resultado[$i]->getIdcargo();
                          $cargo = $resultado[$i]->getNombre();
                          $dependencia = $resultado[$i]->getNombredep();
                          $descripcion =  $resultado[$i]->getDescripcion();
                          $estado = $resultado[$i]->getEstado();
                          $iddep = $resultado[$i]->getIdependencia();

                          echo "<td>$id</td>
                                <td>$cargo</td>
                                <td>$dependencia</td>
                                <td>$descripcion</td>";

                          if($estado==1){
                            echo "<td><h4><span class='badge bg-success'>Activo</span></h4></td>";
                          }else{
                            echo "<td><h4><span class='badge bg-danger'>Inactivo</span></h4></td>";
                          }
                          
                          echo "<td>
                          <a type='submit' href='cargo_editar.php?id=$id' class='btn btn-warning'>
                          <i class='fa fa-edit'></i>
                          </a>"; 
      
                          if($estado==1){
                            echo"<a type='submit' class='btn btn-success' id='btnEliminarCargo' href='../crud/eliminarCargo.php?id=$id'>
                            <i class='fas fa-trash'></i>
                            </a>"; 
                            }else{
                              //Imprimimo botón de reactivar
                              echo"<a type='submit' class='btn btn-danger' id='btnReactivarCargo' href='../crud/devolverCargo.php?id=$id'>
                            <i class='fa fa-share-square'></i>
                            </a>"; 
                            }
                            echo "<a type='submit' href='cargo_vista.php?id=$id'class='btn bg-gradient-primary'>
                            <i class='fas fa-eye'></i> 
                            </a></td>";

                          echo "</tr>";

                     }
                 
                  ?>                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Cargo</th>
                  <th>Dependencia</th>
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

<?php

include("layout/footer.php");

?>
