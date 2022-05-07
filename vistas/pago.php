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
            <h1>Pagos</h1>
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
          <div class="col-md-12">
          
            <div class="card">
              <div class="card-header">
              <div class="row">
              <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Buscar y seleccionar empleado</label>
                        <select class="form-control selectCliente" id="lista2" name="lista2">
                        <option value="0">Seleccionar empleado</option>
                          
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Filtro de búsqueda</label>
                        <select class="form-control" name="filtro" id="filtro">
                          <option value="0">Por empleado</option>
                          <option value="1">Dependencia</option>
                        </select>
                      </div>
                    </div>

                    <!--aqui termina el row-->
                    </div>     <!--aqui termina el row-->
                <div class="">
                <a type="submit" class="btn btn btn-success" href="pago_ingresar.php"> <i class="nav-icon fas fa-plus"> Ingresar pago</i></a>
                  <input type="submit" value="Buscar" class="btn btn-primary " name="btnBuscar" id="btnBuscar">
                </div> 

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Dependencia</th>
                  <th>Mes</th>
                  <th>Año</th>
                  <th>Forma de pago</th>
                  <th>Descripcion</th>
                  <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                   
                   $pago = new Pago();
                   $resultado = $pago->MostrarPagos();

                   for($i=0;  $i<sizeof($resultado); $i++){

                    $id = $resultado[$i]->getIdpago();
                    $nombre =  $resultado[$i]->getNombres();
                    $apellido =  $resultado[$i]->getApellido();
                    $completo = $nombre.' '.$apellido;
                    $cargo = $resultado[$i]->getCargo();
                    $dependencia =  $resultado[$i]->getDependencia();
                    $mes =  $resultado[$i]->getMes();
                    $anio = $resultado[$i]->getAnio();
                    $forma = $resultado[$i]->getForma();
                    $descripcion  = $resultado[$i]->getDescripcion();
                    $estado = $resultado[$i]->getEstado();

                    echo "<tr>";
                    
                    echo "<td>$id</td>
                          <td>$completo</td>
                          <td>$cargo</td>
                          <td>$dependencia</td>
                          <td>$mes</td>
                          <td>$anio</td>
                          <td>$forma</td>
                          <td>$descripcion</td>
                          ";
                    
                          if($estado == 1){
                            echo "<td><h4><span class='badge bg-success'>Pagado</span></h4></td>";
                          }else{
                            echo "<td><h4><span class='badge bg-success'>No pagado</span></h4></td>";
                          }

                    echo "</tr>";
                   }

                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Dependencia</th>
                  <th>Mes</th>
                  <th>Año</th>
                  <th>Forma de pago</th>
                  <th>Descripcion</th>
                  <th>Estado</th>
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


