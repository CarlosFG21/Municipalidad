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
                        <label>Buscar y seleccionar cliente</label>
                        <select class="form-control selectCliente" id="lista2" name="lista2">
                        <option value="0">Seleccionar cliente</option>
                          
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Filtro de búsqueda</label>
                        <select class="form-control" name="filtro" id="filtro">
                          <option value="0">Todos los registros hasta la fecha</option>
                          <option value="1">Por cliente</option>
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
                  <th>Mes</th>
                  <th>Año</th>
                  <th>Salario</th>
                  <th>Bonificacion</th>
                  <th>Otros</th>
                  <th>Igss</th>
                  <th>Plan</th>
                  <th>Fianza</th>
                  <th>Judicial</th>
                  <th>Timbre</th>
                  <th>Dietas</th>
                  <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Mes</th>
                  <th>Año</th>
                  <th>Salario</th>
                  <th>Bonificacion</th>
                  <th>Otros</th>
                  <th>Igss</th>
                  <th>Plan</th>
                  <th>Fianza</th>
                  <th>Judicial</th>
                  <th>Timbre</th>
                  <th>Dietas</th>
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


