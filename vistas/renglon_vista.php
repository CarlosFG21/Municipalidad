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
            <h1>Renglones</h1>
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
                <h3 class="card-title">Ver</h3>
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
                        <label>Tipo renglon</label>
                        <?php
                        $renglon = new Renglon();
                        $id = $_REQUEST['id'];
                        $resultado = $renglon->obtenerRenglonvista($id);
                        
                        $nombre = $resultado->getNombrer();
                        $descripcion =  $resultado->getDescripcion();
                        $estado = $resultado->getEstado();

                        echo "
                        
                        <input type='text' class='form-control' placeholder='$nombre' name='nombre' id='nombre'
                        pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descripción</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$descripcion' name='apellido' id='apellido'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                      ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Estado</label>
                        <?php
                        if($estado==1){
                          echo "
                        <input type='text' class='form-control' placeholder='Activo' name='apellido' id='apellido'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                        }else{
                          echo "
                          <input type='text' class='form-control' placeholder='Inactivo' name='apellido' id='apellido'
                          required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                        }
                        ?>
                      </div>
                    </div>
                    </div> 
                  <div class="">
                  <a type="submit" class="btn btn-danger" href="renglon.php">Regresar</a>
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