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

  $sql = "select id_dependencia, nombre FROM dependencia where estado=1 ORDER BY nombre ASC";
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
                <h3 class="card-title">Editar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
                        $id=$_REQUEST['id'];
                        
                        $cargo = new Cargo();
                        $resultado = $cargo->obtenerDatos($id);

                        $dependencia = $resultado->getNombredep();
                        $cargo = $resultado->getNombre();
                        $descripcion = $resultado->getDescripcion();
                        $estado = $resultado->getEstado();
                        $idp =  $resultado->getIdependencia();
                ?>
                <form role="form" method="post" action="../crud/editarCargo.php?id=<?php echo $id;?>">
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dependencia</label>
                        <select class="form-control select2 " name="cbDependencia" id="cbDependencia" style="width: 100%;">
                        
                         <?php
                           
                           while($row = mysqli_fetch_array($ejecutar)){
   
                          ?>
                          <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                          <?php }  ?>

                          <?php

                          echo "<script>document.getElementById('cbDependencia').value='$idp';</script>"

                          ?>
                        

                        </select>
                      </div>
                    </div> 
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cargo</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Cargo' value='$cargo' name='cargo' id='cargo'
                        pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='5' maxlength='30'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descripción</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='descripcion' value='$descripcion' name='descripcion' id='descripcion'
                        required pattern='^[a-zA-Záéíóú ]{1,30}'  minlength='3' maxlength='60'>";
                        ?>
                      </div>
                    </div>
                    </div> 
                  <div class="">
                  <input type="submit" value="Editar" class="btn btn-primary " name="btnEditarCargo" id="btnEditarCargo">
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
    $('#btnEditarCargo').click(function() {

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