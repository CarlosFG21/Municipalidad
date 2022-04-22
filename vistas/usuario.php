<?php 

include('layout/header.php');

?>

<title>Municipalidad | Gualán</title>
  <!-- Tell the browser to be responsive to screen width -->

<?php 

include('layout/nav.php');

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
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
              <a type="submit" class="btn btn btn-success" href="usuario_ingresar.php"> <i class="nav-icon fas fa-plus"> Ingresar usuario</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                 <?php
                 
              // <!-- codigo de mostrar los datos -->
                     $usuario = new Usuario();
                     $usuarioarray = $usuario->obtenerUsuarios();

                     for($i=0; $i<sizeof($usuarioarray); $i++){
                      
                      echo "<tr>";

                      $id = $usuarioarray[$i]->getIdUsuario();
                      $nombre = $usuarioarray[$i]->getNombre();
                      $apellido = $usuarioarray[$i]->getApellido();
                      $usuariov = $usuarioarray[$i]->getNickname();
                      $rol = $usuarioarray[$i]->getRol();
                      $estado = $usuarioarray[$i]->getEstado();

                      echo "
                      
                      <td>$id</td>
                      <td>$nombre</td>
                      <td>$apellido</td>
                      <td>$usuariov</td>
                      <td>$rol</td>
                    
                      ";

                      if($estado==1){

                        echo "<td><h4><span class='badge bg-success'>Activo</span></h4></td>";

                      }else{
                        echo "<td><h4><span class='badge bg-danger'>Inactivo</span></h4></td>";
                      }

                      echo "<td>
                      <a type='submit' href='usuario_editar.php?id=$id' class='btn btn-warning'>
                      <i class='fa fa-edit'></i>
                      </a>"; 

                      if($estado==1){
                        echo"<a type='submit' class='btn btn-success' id='btnEliminar' href='../crud/eliminarUsuario.php?id=$id'>
                        <i class='fas fa-trash'></i>
                        </a>"; 
                        }else{
                          //Imprimimo botón de reactivar
                          echo"<a type='submit' class='btn btn-danger' id='btnReactivar' href='../crud/devolverUsuario.php?id=$id'>
                        <i class='fa fa-share-square'></i>
                        </a>"; 
                        }
                        echo "<a type='submit' href='usuario_vista.php?id=$id'class='btn bg-gradient-primary'>
                        <i class='fas fa-eye'></i> 
                        </a></td>";
                      
                      
                      echo "</tr>";

                     }

                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Nombres</th>
                  <th>Apellido</th>
                  <th>Usuario</th>
                  <th>Rol</th>
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

include('layout/footer.php');

?>