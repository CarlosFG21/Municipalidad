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
                <h3 class="card-title">Ver</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="post" action="../crud/ingresarUsuario.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Codigo</label>
                        <?php
                        $id = $_REQUEST['id'];
                        $dependencia = new Dependencia();
                        $resultado = $dependencia->buscarDependencia($id);

                        $nombre = $resultado->getNombre();
                        $codigo = $resultado->getCodigo();
                        $descripcion = $resultado->getDescripcion();
                        $estado = $resultado->getEstado();
                        echo "
                        <input type='text' class='form-control' placeholder='$codigo' name='codigo' id='codigo'
                        pattern='^[a-zA-Záéíóú ]{1,30}' disabled minlength='1' maxlength='50' disabled>"
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre dependencia</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$nombre' name='dependencia' id='dependencia'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' minlength='1' maxlength='50' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descripción</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$descripcion' name='descripcion' id='descripcion'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' disabled minlength='1' maxlength='50' disabled>";
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
                        <input type='text' class='form-control' placeholder='Activo' name='estado' id='estado'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                        }else{
                          echo "
                        <input type='text' class='form-control' placeholder='Inactivo' name='estado' id='estado'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                        }
                        ?>
                      </div>
                    </div>
                    </div> 
                  <div class="">
    
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