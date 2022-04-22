<?php

include ("layout/header.php");

?>
  <title>Municipalidad | Gualán</title>
  <!-- Tell the browser to be responsive to screen width -->
 
<?php

include ("layout/nav.php");

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            
        <?php
            $ide = $_REQUEST['idempleadon'];
            $em = new Empleado();
            $re = $em->empleadoVer($ide);
            $name = $re->getNombre();
            $lastName = $re->getApellido();
            echo "<h1>Ver la observacion del empleado: <span class='badge bg-success'>$name $lastName</span></h1>";
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
                <form role="form" method="post" action=".">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tipo de observacion</label>
                        <?php
                         
                         $id = $_REQUEST['id'];
                         $observacion = new Observacion();
                         $resultado = $observacion->verObservacion($id);
                         
                         $tipo = $resultado->getNobservacion();
                         $descripcion = $resultado->getDescripcion();
                         $estado =  $resultado->getEstado();
                         $hora = $resultado->getHora();

                         echo "
                        <input type='text' class='form-control' placeholder='$tipo' name='descripcion' id='descripcion'
                        pattern='^[a-zA-Záéíóú ]{1,30}' disabled minlength='1' maxlength='250'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descripcion</label>
                        <?php 
                         echo "
                         <input type='text' class='form-control' placeholder='$descripcion' name='descripcion' id='descripcion'
                         pattern='^[a-zA-Záéíóú ]{1,30}' disabled minlength='1' maxlength='250'>";
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
                         <input type='text' class='form-control' placeholder='Activa' name='descripcion' id='descripcion'
                         pattern='^[a-zA-Záéíóú ]{1,30}' disabled minlength='1' maxlength='250'>";
                        }else{
                          echo "
                         <input type='text' class='form-control' placeholder='Inactiva' name='descripcion' id='descripcion'
                         pattern='^[a-zA-Záéíóú ]{1,30}' disabled minlength='1' maxlength='250'>";
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Hora</label>
                        <?php 
                         echo "
                         <input type='text' class='form-control' placeholder='$hora' name='descripcion' id='descripcion'
                         pattern='^[a-zA-Záéíóú ]{1,30}' disabled minlength='1' maxlength='250'>";
                        ?>
                      </div>
                    </div>
                    
                  </div>
                  <div class="">
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