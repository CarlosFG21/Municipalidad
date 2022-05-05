<?php

include("layout/header.php");

?>


<?php

include("layout/nav.php");

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
      <!-- left column -->
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Ingresar</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
         <!-- <div class="form-group">
          <h4>Datos Laborales</h4>
          </div> -->
          
          <!-- /.Validacion codigo php -->
            <form role="form" method="post" action="../crud/ingresarUsuario.php">
              <div class="row">
              <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Empleados</label>
                <select class="form-control select2 " name="cbEmpleado" id="cbEmpleado" style="width: 100%;">
                <option value="" disabled="disabled" selected>Seleccione un empleado</option>
                
                </select>
              </div>
            </div> 
            <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Planilla</label>
              <select class="form-control select2 " name="cbPlanilla" id="cbPlanilla" style="width: 100%;">
              <option value="" disabled="disabled" selected>Seleccione una planilla del empleado</option>
              
              </select>
            </div>
            </div> 
            <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Forma de pago</label>
              <select class="form-control" name="forma" id="forma">
                <option>Acreditamiento</option>
                <option>Cheque</option>
              </select>
            </div>
            </div>              
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" placeholder="Descripcion" minlength="4" maxlength="8" required name="descripcion" id="descripcion" pattern="^[a-zA-Záéíóú]{1,30}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Sueldo base</label>
                    <input type="text" class="form-control" placeholder="Sueldo base" minlength="4" maxlength="8" disabled name="contrasena" id="contrasena" pattern="^[a-zA-Záéíóú0-9.,_- ]{1,30}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Ingreso total</label>
                    <input type="text" class="form-control" placeholder="Ingreso total" minlength="4" maxlength="8" disabled name="descripcion" id="descripcion" pattern="^[a-zA-Záéíóú]{1,30}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Total descuento</label>
                    <input type="text" class="form-control" placeholder="Total descuento" minlength="4" maxlength="8" disabled name="descripcion" id="descripcion" pattern="^[a-zA-Záéíóú]{1,30}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Sueldo recibido</label>
                    <input type="text" class="form-control" placeholder="Sueldo recibido" minlength="4" maxlength="8" disabled name="descripcion" id="descripcion" pattern="^[a-zA-Záéíóú]{1,30}">
                  </div>
                </div>
              </div>  
              <div class="">
              <input type="submit" value="Guardar" class="btn btn-primary" name="btnGuardarPago" id="btnGuardarPago">
              <a type="submit" class="btn btn-danger" href="pago.php">Regresar</a>
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

<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    });
</script>