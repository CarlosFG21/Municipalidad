
<?php 
include('layout/header.php');
?>
<?php 
include('layout/nav.php');
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reportes</h1>
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
          <!-- left column -->
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Reportes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <button type="button" onclick="window.open('../reportes/empleadosactivos.php',target='_blank')"> <img src="https://cdn-icons-png.flaticon.com/512/554/554795.png" height ="150" width="350" />Empleados Activos</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <button type="button" onclick="window.open('../reportes/empleadosinactivos.php',target='_blank')"> <img src="https://cdn-icons-png.flaticon.com/512/554/554795.png" height ="150" width="333" />Empleados Inactivos</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <button type="button"  onclick="window.open('../reportes/dependenciaactiva.php',target='_blank')"> <img src="https://cdn-icons-png.flaticon.com/512/2332/2332199.png" height ="150" width="329" />Dependencias Activas</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <button type="button"  onclick="window.open('../reportes/dependenciainactiva.php',target='_blank')"> <img src="https://cdn-icons-png.flaticon.com/512/2332/2332199.png" height ="150" width="312" />Dependencias Inactivas</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <button type="button" onclick="window.open('../reportes/usuariosactivos.php',target='_blank')"> <img src="https://www.seekpng.com/png/full/202-2022198_icono-administrador-de-usuario-iconos-de-administrador-png.png" height ="150" width="365" />Usuarios Activos</button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <button type="button" onclick="window.open('../reportes/usuariosinactivos.php',target='_blank')"> <img src="https://www.seekpng.com/png/full/202-2022198_icono-administrador-de-usuario-iconos-de-administrador-png.png" height ="150" width="350" />Usuarios Inactivos</button>
                        </div>
                    </div>
                    <!-- /.card -->
                    </div> 
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




<?php 
include('layout/footer.php');
?>