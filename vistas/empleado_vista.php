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
            <h1>Empleados</h1>
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
             <!-- <div class="form-group">
              <h4>Datos Laborales</h4>
              </div> -->
              <!-- /.Validacion codigo php -->
              
                <form role="form" method="post" action="../crud/ingresarEmpleado.php">
                <div class="">
                 <h3>Datos Personales</h3>
                 <hr style="width:75%; height:5px; 
                 width: 30%;
                 display: inline-block;">
                </div> 
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre</label>
                        <?php

                         
                         $empleado = new Empleado();
                         $id = $_REQUEST['id'];
                         $resultado = $empleado->empleadoVer($id);

                         $nombre = $resultado->getNombre();
                         $apellido =  $resultado->getApellido();
                         $dpi =  $resultado->getDpi();
                         $nit =  $resultado->getNit();
                         $telefono =  $resultado->getTelefono();
                         $departamento = $resultado->getNombred();
                         $municipio = $resultado->getNombremu();
                         $fecha_n = $resultado->getFecha_nacimiento();
                         $igss = $resultado->getNoigss();
                         $cuenta = $resultado->getNocuenta();
                         $expediente = $resultado->getNoexpediente();
                         $renglon = $resultado->getNombrere();
                         $dependencia = $resultado->getNombrede();
                         $cargo = $resultado->getNombrecar();
                         $fecha_ingreso = $resultado->getFingreso();
                         $fecha_egreso = $resultado->getFegreso();
                         $pago = $resultado->getFopago();
                         $salario = $resultado->getSalario();
                         $boni = $resultado->getBonificacion();
                         $otros = $resultado->getOtros();
                         $isr_s = $resultado->getSalario_isr();
                         $dietas =  $resultado->getDieta_isr();
                         $estado =  $resultado->getEstado();
                         $igsscheck = $resultado->getIgss();
                         $fianza = $resultado->getFianza();
                         $judicial = $resultado->getJudicial();
                         $timbre = $resultado->getTimbre();
                         $plan = $resultado->getPlan();
                         $isrdietad = $resultado->getIsrDietasd();

                        echo "
                        <input type='text' class='form-control' placeholder='$nombre' name='nombre' id='nombre'
                        pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Apellido</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$apellido' name='apellido' id='apellido'
                        pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dpi</label>
                        <?php
                        echo"
                        <input type='text' class='form-control' placeholder='$dpi' minlength='3' maxlength='9' required name='dpi' id='dpi' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nit</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$nit' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Telefono</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$telefono' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Departamento</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$departamento' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Municipio</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$municipio' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha nacimiento</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$fecha_n' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Afiliacion igss</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$igss' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cuenta bancaria</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$cuenta' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No. Expediente</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$expediente' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Estado</label>
                        <?php
                        if($estado==1){
                        echo "
                        <input type='text' class='form-control' placeholder='Activo' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        }else{
                          echo "
                        <input type='text' class='form-control' placeholder='Inactivo' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        }
                        ?>
                      </div>
                    </div> 
                </div> <!---terminacion del row --> 
                <!--inicializacion del row--> 
                <div class="">
                 <h3>Datos Laborales</h3>
                 <hr style="width:75%; height:5px; 
                 width: 30%;
                 display: inline-block;">
                </div>
                <div class="row">
                <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Renglon</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$renglon' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dependencia</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$dependencia' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cargo</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$cargo' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>   
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha de ingreso</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$fecha_ingreso' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha de egreso</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$fecha_egreso' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Forma de pago</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$pago' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>  
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Salario</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$salario' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bonificacion</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$boni' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Otros</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$otros' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descuentos</label>
                        <br>
                        <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="igss" value="1" disabled <?php if($igsscheck==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="exampleRadios1">Igss</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="plan" value="1" disabled <?php if($plan==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="inlineCheckbox2">Plan</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="fianza" value="1" disabled <?php if($fianza==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="inlineCheckbox2">Fianza</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="isrdietas" value="1" disabled <?php if($isrdietad==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="inlineCheckbox2">Isr dietas</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="timbre" value="1" disabled <?php if($timbre==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="inlineCheckbox2">Timbre</label>
                       </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judicial</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$judicial' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Isr salario</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$isr_s' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dietas</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$dietas' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                </div> 
                <div class="">
                 
                  <a type="submit" class="btn btn-danger" href="empleado.php">Regresar</a>
                </div> 
                </form>
              </div>
              <!-- /.card-body -->
            </div>
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