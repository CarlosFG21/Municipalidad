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
            <h1>Dependencia</h1>
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
                $id = $_REQUEST['id'];
                $dependencia = new Dependencia();
                $resultado = $dependencia->buscarDependencia($id);

                $nombre = $resultado->getNombre();
                $codigo = $resultado->getCodigo();
                $descripcion = $resultado->getDescripcion();

                ?>
                <form role="form" method="post" action="../crud/editarDependencia.php?id=<?php echo $id;?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Codigo</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='codigo' value='$codigo' name='codigo' id='codigo'
                        pattern='^[a-zA-Záéíóú0-9]{1,30}' required minlength='3' maxlength='17'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre dependencia</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='dependencia' value='$nombre' name='dependencia' id='dependencia'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='5' maxlength='55'>";
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
                        required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='5' maxlength='60'>";
                        ?>
                      </div>
                    </div>
                    </div> 
                  <div class="">
                  <input type="submit" value="Editar" class="btn btn-primary " name="btnEditarDependencia" id="btnEditarDependencia">
                  <a type="submit" class="btn btn-danger" href="dependencia.php">Regresar</a>
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

<script type="text/javascript">
$(function() {
    $('#btnEditarDependencia').click(function() {

        var valid = this.form.checkValidity();
        if (valid) {
          //alert('!Efectuando Guardado!');
   
        } else {
            alert('Debe de rellenar los campos');
        }

        var nombre = $('#descripcion').val();
        var apellido = $('#dependencia').val();
        var usuario = $('#codigo').val();

    });

});
</script>