<?php

include ("layout/header.php");

?>
  <title>Municipalidad | Gualán</title>
  <!-- Tell the browser to be responsive to screen width -->
 
<?php

include ("layout/nav.php");

?>

<?php

$conexion = new Conexion();
$conexion->conectar();
$sql = "select id_tipo_observacion,nombre from tipo_observacion where estado=1 ORDER BY nombre ASC";
$ejecutar = mysqli_query($conexion->db,$sql);

?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            
        <?php
            $ide = $_REQUEST['idempleado'];
            $em = new Empleado();
            $re = $em->empleadoVer($ide);
            $name = $re->getNombre();
            $lastName = $re->getApellido();
            echo "<h1>Editar la observacion al empleado: <span class='badge bg-success'>$name $lastName</span></h1>";
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
          <!-- left column -->
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ver</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                         
                         $id = $_REQUEST['id'];
                         $observacion = new Observacion();
                         $resultado = $observacion->verObservacion($id);
                         
                         $tipo = $resultado->getidTipo();
                         $descripcion = $resultado->getDescripcion();
                         
                ?>
                <form role="form" method="post" action="../crud/editarObservacion.php?id=<?php echo $id;?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tipo de observacion</label>
                        <select class="form-control selectDirecciones" id="cbTipo" name="cbTipo">
                          <option value="0">Seleccione una observacion</option>
                          <?php
                        while($row = mysqli_fetch_array($ejecutar)){

                       ?>
                       <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                       <?php }  ?>

                       <?php

                       echo "<script>document.getElementById('cbTipo').value='$tipo';</script>"

                         ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descripcion</label>
                        <?php 
                         echo "
                         <input type='text' class='form-control' placeholder='descripcion' value='$descripcion' name='descripcion' id='descripcion'
                         pattern='^[a-zA-Záéíóú ]{1,30}'  minlength='3' maxlength='60'>";
                        ?>
                      </div>
                    </div>
                  </div>
                  <div class="">
                  <input type="submit" value="Editar" class="btn btn-primary" name="btnEditarObservacion" id="btnEditarObservacion">
                    <a type="submit" class="btn btn-danger" href="observacion.php">Regresar</a>
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

include ("layout/footer.php");

?>

<script type="text/javascript">
$(function() {
    $('#btnEditarObservacion').click(function() {

        var valid = this.form.checkValidity();
        if (valid) {
          //alert('!Efectuando Guardado!');
   
        } else {
            alert('Debe de rellenar los campos o coincidir con el formato');
        }

        var nombre = $('#descripcion').val();
        var apellido = $('#cbTipo').val();
      

    });

});
</script>