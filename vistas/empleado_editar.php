<?php

include("layout/header.php");

?>

<?php

include("layout/nav.php");

?>

<?php
  
$conexion = new Conexion();
//Conectamos a la base de datos
$conexion->conectar();

  $sql = "select id_departamento, CONCAT(nombre) FROM departamento ORDER BY nombre ASC";
  $ejecutar = mysqli_query($conexion->db, $sql);

  //cargar ultimo ID de departamento


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
                <h3 class="card-title">Editar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
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
              $renglon = $resultado->getidRenglon();
              $dependencia = $resultado->getidDependencia();
              $cargo = $resultado->getidCargo();
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
              $id_departamento =  $resultado->getIdepartamento();
              $id_municipio = $resultado->getidMuncipio();
              $isrdietad = $resultado->getIsrDietasd();
              
              ?>
                <form role="form" method="post" action="../crud/editarEmpleado.php?id=<?php echo $id;?>">
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
                         echo "
                        <input type='text' class='form-control' placeholder='Nombre'value='$nombre' name='nombre' id='nombre'
                        pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='3' maxlength='25'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Apellido</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Apellido' value='$apellido' name='apellido' id='apellido'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='3' maxlength='20'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dpi</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Dpi' minlength='13' maxlength='13' required value='$dpi' name='dpi' id='dpi' pattern='^[a-zA-Záéíóú0-9]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nit</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Nit' minlength='3' maxlength='9' value='$nit' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Telefono</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Telefono' minlength='8' maxlength='8' required value='$telefono' name='telefono' id='telefono' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Departamento</label>
                        <select class="form-control select2" name="cbDepartamento" id="cbDepartamento" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione un departamento</option>
                        <?php
                         while($row = mysqli_fetch_array($ejecutar)){

        

                        ?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                        <?php }  ?>

                        <?php

                       echo "<script>document.getElementById('cbDepartamento').value='$id_departamento';</script>"

                        ?>
                        </select>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Municipio</label>
                        <select class="form-control" name="cbMunicipio" id="cbMunicipio" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione un municipio</option>
                        <?php 
   
                       $conexion = new Conexion();
                       $conexion->conectar();
                       echo "entro a municipio";

                      $queryM = "SELECT id_municipio, nombre FROM municipio where id_departamento = '
                      $id_departamento' ORDER BY nombre ASC   ";

                      $ejecutar = mysqli_query($conexion->db, $queryM);


                      while($row = mysqli_fetch_array($ejecutar)){
 
                      echo $html = "<option value=".$row[0].">".$row[1]."</option>";

                        }

                        echo "<script>document.getElementById('cbMunicipio').value='$id_municipio';</script>";

                            ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha nacimiento</label>
                        <?php
                        echo "
                        <input type='date' class='form-control' placeholder='Nit' minlength='3' maxlength='9' required value='$fecha_n' name='fecha_n' id='fecha_n' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Afiliacion igss</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Igss' minlength='9' maxlength='9' required value='$igss' name='igss' id='igss' pattern='^[0-9._- ]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cuenta bancaria</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Cuenta bancaria' minlength='3' maxlength='21' required value='$cuenta' name='cuenta' id='cuenta' pattern='^[0-9._- ]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No. Expediente</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Cuenta bancaria' minlength='5' maxlength='19' required value='$expediente' name='no_expediente' id='no_expediente' pattern='^[0-9._- ]{1,30}'>";
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
                        <select class="form-control" name="cbRenglon" id="cbRenglon" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione un renglon</option>
                       <?php
                       $conexion = new Conexion();
                       $conexion->conectar();
                       echo "entro a renglon";

                      $queryM = "select id_renglon, nombre from renglon where estado=1 order by nombre asc";

                      $ejecutar = mysqli_query($conexion->db, $queryM);


                      while($row = mysqli_fetch_array($ejecutar)){
 
                      echo $html = "<option value=".$row[0].">".$row[1]."</option>";

                      }?>

                      <?php

                      echo "<script>document.getElementById('cbRenglon').value='$renglon';</script>"

                      ?>
                        </select>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dependencia</label>
                        <select class="form-control select2 " name="cbDependencia" id="cbDependencia" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione una dependencia</option>
                        <?php
                       $conexion = new Conexion();
                       $conexion->conectar();
                       echo "entro a dependencia";

                      $queryM = "select id_dependencia, nombre from dependencia where estado=1 order by nombre asc";

                      $ejecutar = mysqli_query($conexion->db, $queryM);


                      while($row = mysqli_fetch_array($ejecutar)){
 
                      echo $html = "<option value=".$row[0].">".$row[1]."</option>";

                      }?>

                      <?php

                      echo "<script>document.getElementById('cbDependencia').value='$dependencia';</script>"

                      ?>
                        </select>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control" name="cbCargo" id="cbCargo" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione un cargo</option>
                        <?php
                       $conexion = new Conexion();
                       $conexion->conectar();
                       echo "entro a dependencia";

                      $queryM = "select id_cargo, nombre from cargo where estado=1 order by nombre asc";

                      $ejecutar = mysqli_query($conexion->db, $queryM);


                      while($row = mysqli_fetch_array($ejecutar)){
 
                      echo $html = "<option value=".$row[0].">".$row[1]."</option>";

                      }?>

                      <?php

                      echo "<script>document.getElementById('cbCargo').value='$cargo';</script>"

                      ?>
                        </select>
                      </div>
                    </div>   
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha de ingreso</label>
                        <?php
                        echo "
                        <input type='date' class='form-control' placeholder='Nit' minlength='3' maxlength='9' required value='$fecha_ingreso' name='fecha_i' id='fecha_i' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                         ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Forma de pago</label>
                        <select class="form-control" name="cbPago" id="cbPago" style="width: 100%;">
                        <?php
                          
                          if(strcmp($pago, "Acreditamiento") === 0){
                          echo "<option>Acreditamiento</option>";
                          echo "<option>Cheque</option>";
                          }

                          if(strcmp($pago, "Cheque") === 0){
                            echo "<option>Cheque</option>";
                            echo "<option>Acreditamiento</option>";
                            }

                          ?>
                        </select>
                      </div>
                    </div>  
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Salario</label>
                        <?php
                        echo "
                        <input type='number' class='form-control' placeholder='Salario' minlength='3' maxlength='10'  value='$salario' name='salario' id='salario' pattern='^[0-9.,]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bonificacion</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Bonificacion' minlength='3' maxlength='3'  value='$boni' name='bonificacion' id='bonificacion' pattern='^[0-9.,]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Otros</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Otros' minlength='3' maxlength='10'  value='$otros' name='otros' id='otros' pattern='^[0-9.,]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descuentos</label>
                        <br>
                        <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="igsss" name="igsss" value="igsss" <?php if($igsscheck==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="exampleRadios1">Igss</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="plan" name="plan" value="plan" <?php if($plan==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="inlineCheckbox2">Plan</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="fianza" name="fianza" value="fianza" <?php if($fianza==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="inlineCheckbox2">Fianza</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="isrdietas" name="isrdietas" value="1" <?php if($isrdietad==1){echo "checked='true'";}?>>
                       <label class="form-check-label" for="inlineCheckbox2">Isr dietas</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="timbre" name="timbre" value="timbre" <?php if($timbre==1){echo "checked='true'";}?>>
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
                        <input type='text' class='form-control' placeholder='Judicial' minlength='2' maxlength='8' required value='$judicial' name='judicial' id='judicial' pattern='^[0-9.,]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Isr salario</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Isr salario' minlength='3' maxlength='8' required value='$isr_s' name='isrsalario' id='isrsalario' pattern='^[0-9.,]{1,30}'>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dietas</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='Isa dietas' minlength='3' maxlength='10' required value='$dietas' name='dietas' id='dietas' pattern='^[0-9.,]{1,30}'>";
                        ?>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <input id="txtId" type="hidden" name="txtId" type="text" class="form-control" placeholder="" value="0">
                      <input id="txtIdS" type="hidden" name="txtIdS" type="text" class="form-control" placeholder="" value="0">
                      </div>
                    </div>
                <div class="">
                  <input type="submit" value="Editar" class="btn btn-primary " name="btnEditarEmpleado" id="btnEditarEmpleado">
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

<script>
  $(document).ready(function(){
    $("#cbDepartamento").change(function () { 	

      document.getElementById("txtId").value = "";
   
      $("#cbDepartamento option:selected").each(function () {
        id_departamento = $(this).val();
            
        $.post("../crud/getMunicipio.php", {  id_departamento:  id_departamento }, function(data){
          $("#cbMunicipio").html(data);
        });            
      });
    })
  });
</script>

<script>
  $(document).ready(function(){
    $("#cbDependencia").change(function () { 	

      document.getElementById("txtIdS").value = "";
   
      $("#cbDependencia option:selected").each(function () {
        id_dependencia = $(this).val();
            
        $.post("../crud/getCargo.php", {  id_dependencia:  id_dependencia }, function(data){
          $("#cbCargo").html(data);
        });            
      });
    })
  });
</script>

<script>
  $(document).ready(function(){
    $("#cbMunicipio").change(function () { 	
      var index =  document.getElementById("cbMunicipio").selectedIndex;
      if (index == 0){
        document.getElementById("txtId").value = "";
      }
    })
  });

  $(document).ready(function(){
    $("#cbCargo").change(function () { 	
      var index =  document.getElementById("cbCargo").selectedIndex;
      if (index == 0){
        document.getElementById("txtIdS").value = "";
      }
    })
  });
</script>

<script type="text/javascript">
$(function() {
    $('#btnEditarEmpleado').click(function() {

        var valid = this.form.checkValidity();
        if (valid) {
          //alert('!Efectuando Guardado!');
   
        } else {
            alert('Debe de rellenar los campos o coincidir con el formato');
        }

        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var dpi = $('#dpi').val();
        var nit = $('#nit').val();
        var telefono = $('#telefono').val();
        var municipio = $('#cbMunicipio').val();
        var fechan = $('#fecha_n').val();
        var igss = $('#igss').val();
        var cuenta = $('#cuenta').val();
        var expediente = $('#no_expediente').val();
        var renglon = $('#cbRenglon').val();
        var cargo = $('#cbCargo').val();
        var fechai = $('#fecha_i').val();
        var pago = $('#cbPago').val();   

    });

});
</script>


<script>var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("fecha_n")[0].setAttribute('max', today);</script>

<script src="../js/eventodireccion.js"></script>
<script type="text/javascript">

