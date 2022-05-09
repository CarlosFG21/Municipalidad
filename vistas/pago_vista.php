<?php

include("layout/header.php");

?>

<title>Municipalidad | Gualán</title>
  <!-- Tell the browser to be responsive to screen width -->

<?php

include("layout/nav.php");

?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pago</h1>
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
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre del empleado</label>
                        <?php  
                        $id = $_REQUEST['id'];
                        $pago = new Pago();
                        $resultado = $pago->verPago($id);
                        $nombre = $resultado->getNombres();
                        $apellido = $resultado->getApellido();
                        $completo = $nombre.' '.$apellido;
                        $cargo = $resultado->getCargo();
                        $dependencia = $resultado->getDependencia();
                        $mes  = $resultado->getMes();
                        $anio = $resultado->getAnio();
                        $forma = $resultado->getForma();
                        $descripcion = $resultado->getDescripcion();
                        $estado = $resultado->getEstado();
                        $sueldo = $resultado->getSueldo();
                        $fecha = $resultado->getFecha();
                        //Imprimimos nombre
                        echo "<input type='text' class='form-control' placeholder='$completo'
                        required autocomplete='off' onkeypress='return (event.charCode >= 65 && event.charCode <= 165)' min='1' disabled>";
                        
                        ?>

                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cargo</label>
                        
                        <?php
                        //-----------------Imprimimos el apellido
                        echo "<input type='text' class='form-control' placeholder='$cargo'
                        required autocomplete='off' onkeypress='return (event.charCode >= 65 && event.charCode <= 165)' min='1' disabled>"; 
                        
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dependencia</label>
                      <?php  
                        //-----------Imprimimos el usuario
                        echo "<input type='text' class='form-control' placeholder='$dependencia' disabled>";
                      ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Mes de pago</label>
                        
                        <?php
                        //------------Imprimimos el permiso
                        echo "<input type='text' class='form-control' placeholder='$mes' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Año de pago</label>
                        <?php
                        echo "<input type='text' class='form-control' value='$anio' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Forma de pago</label>
                        <?php
                        echo "<input type='text' class='form-control' value='$forma' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descripcion del pago</label>
                        <?php
                        echo "<input type='text' class='form-control' value='$descripcion' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha de pago</label>
                        <?php
                        echo "<input type='text' class='form-control' value='$fecha' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sueldo pagado</label>
                        <?php
                        echo "<input type='text' class='form-control' value='$sueldo' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Estado</label>
                        <?php
                        if($estado==1){
                        echo "<input type='text' class='form-control' value='Pagado' disabled>";
                        }else{
                          echo "<input type='text' class='form-control' value='No pagado' disabled>";
                        }
                        ?>
                      </div>
                    </div>
                  </div>  
                  <div class="">
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

include("layout/footer.php");

?>