<?php

include("layout/header.php");

?>

<title>Municipalidad | Gualán</title>

<?php

include("layout/nav.php");

?>

<?php
  
$conexion = new Conexion();
//Conectamos a la base de datos
$conexion->conectar();

  $sql = "select id_dependencia, CONCAT(nombre) FROM dependencia where estado=1 ORDER BY nombre ASC";
  $ejecutar = mysqli_query($conexion->db, $sql);

  //cargar ultimo ID de direccion


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
              <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'existe'){
              ?>
               <div class="alert alert-danger alert-dismissible col-sm-6">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                  !El cargo a ingresar ya existe.!
                </div>
              <?php
                }
              ?>
                <form role="form" method="post" action="../crud/ingresarCargo.php">
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dependencia</label>
                        <select class="form-control select2 " name="cbDependencia" id="cbDependencia" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione una dependencia</option>
                        <?php
                        while($row = mysqli_fetch_array($ejecutar)){

                       ?>
                       <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                       <?php }  ?>
                        </select>
                      </div>
                    </div> 
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cargo</label>
                        <input type="text" class="form-control" placeholder="Cargo" name="cargo" id="cargo"
                        pattern="^[a-zA-Záéíóú ]{1,30}" required minlength="5" maxlength="30">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descripción</label>
                        <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" id="descripcion"
                        required pattern="^[a-zA-Záéíóú ]{1,30}" required minlength="3" maxlength="60">
                      </div>
                    </div>
                    </div> 
                  <div class="">
                  <input type="submit" value="Guardar" class="btn btn-primary " name="btnGuardarCargo" id="btnGuardarCargo">
                  <a type="submit" class="btn btn-danger" href="cargo.php">Regresar</a>
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

include("layout/footer.php");

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

<script type="text/javascript">
$(function() {
    $('#btnGuardarCargo').click(function() {

        var valid = this.form.checkValidity();
        if (valid) {
          //alert('!Efectuando Guardado!');
   
        } else {
            alert('Debe de rellenar los campos');
        }

        var nombre = $('#cbDependencia').val();
        var apellido = $('#cargo').val();
        var usuario = $('#descripcion').val();
  
    });

});
</script>

