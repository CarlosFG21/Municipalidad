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

<?php

$conexion = new Conexion();
$conexion->conectar();

$sql = "select id_renglon, nombre from renglon where estado=1 order by nombre asc";
$renglon = mysqli_query($conexion->db,$sql);

?>

<?php

$conexion = new Conexion();
$conexion->conectar();

$sqld = "select id_dependencia,nombre from dependencia where estado=1 order by nombre asc";
$dependencia = mysqli_query($conexion->db,$sqld);

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
                <h3 class="card-title">Ingresar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php 
              if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'existe'){
            ?>
             <div class="alert alert-danger alert-dismissible col-sm-6">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                !El empleado a ingresar ya existe.!
              </div>
            <?php
              }
            ?>
              
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
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre"
                        pattern="^[a-zA-Záéíóú ]{1,30}" required minlength="3" maxlength="25">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido"
                        required pattern="^[a-zA-Záéíóú ]{1,30}" required minlength="3" maxlength="20">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dpi</label>
                        <input type="text" class="form-control" placeholder="Dpi" minlength="13" maxlength="13" required name="dpi" id="dpi" pattern="^[0-9]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nit</label>
                        <input type="text" class="form-control" placeholder="Nit" minlength="3" maxlength="9" required name="nit" id="nit" pattern="^[0-9]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Telefono</label>
                        <input type="text" class="form-control" placeholder="Telefono" minlength="8" maxlength="8" required name="telefono" id="telefono" pattern="^[a-zA-Záéíóú0-9.,_- ]{1,30}">
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
                        </select>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Municipio</label>
                        <select class="form-control" name="cbMunicipio" id="cbMunicipio" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione un municipio</option>
                        
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha nacimiento</label>
                        <input type="date" class="form-control" placeholder="Nit" minlength="3" maxlength="9" required name="fecha_n" id="fecha_n" pattern="^[a-zA-Záéíóú0-9.,_- ]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Afiliacion igss</label>
                        <input type="text" class="form-control" placeholder="Igss" minlength="9" maxlength="9" required name="igss" id="igss" pattern="^[a-zA-Záéíóú0-9.,_- ]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cuenta bancaria</label>
                        <input type="text" class="form-control" placeholder="Cuenta bancaria" minlength="21" maxlength="21" required name="cuenta" id="cuenta" pattern="^[a-zA-Záéíóú0-9.,_- ]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No. Expediente</label>
                        <input type="text" class="form-control" placeholder="Cuenta bancaria" minlength="5" maxlength="19" required name="no_expediente" id="no_expediente" pattern="^[a-zA-Záéíóú0-9.,_- ]{1,30}">
                      </div>
                    
                </div> <!---terminacion del row --> 
                <!--inicializacion del row-->
                </div>
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
                         while($row = mysqli_fetch_array($renglon)){

        

                        ?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                        <?php }  ?>
                        </select>
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
                         while($row = mysqli_fetch_array($dependencia)){

        

                        ?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                        <?php }  ?>
                        </select>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cargo</label>
                        <select class="form-control" name="cbCargo" id="cbCargo" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione un cargo</option>
                        
                        </select>
                      </div>
                    </div>   
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha de ingreso</label>
                        <input type="date" class="form-control" placeholder="Nit" minlength="3" maxlength="9" required name="fecha_i" id="fecha_i" pattern="^[a-zA-Záéíóú0-9.,_- ]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Forma de pago</label>
                        <select class="form-control" name="cbPago" id="cbPago" style="width: 100%;">
                        <option value="" disabled="disabled" selected>Seleccione una forma de pago</option>
                        <option>Acreditamiento</option>
                        <option>Cheque</option>
                        </select>
                      </div>
                    </div>  
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Salario</label>
                        <input type="text" class="form-control" placeholder="Salario" minlength="3" maxlength="6" name="salario" id="salario" pattern="^[0-9]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bonificacion</label>
                        <input type="text" class="form-control" placeholder="Bonificacion" minlength="3" maxlength="3" name="bonificacion" id="bonificacion" pattern="^[0-9]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Otros</label>
                        <input type="text" class="form-control" placeholder="Otros" minlength="3" maxlength="6"  name="otros" id="otros" pattern="^[0-9]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Descuentos</label>
                        <br>
                        <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="igsss" name="igsss" value="igsss">
                       <label class="form-check-label" for="exampleRadios1">Igss</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="plan" name="plan" value="plan">
                       <label class="form-check-label" for="inlineCheckbox2">Plan</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="fianza" name="fianza" value="fianza">
                       <label class="form-check-label" for="inlineCheckbox2">Fianza</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="judicial" name="judicial" value="judicial">
                       <label class="form-check-label" for="inlineCheckbox2">Judicial</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="isrdietas" name="isrdietas" value="isrdietas">
                       <label class="form-check-label" for="inlineCheckbox2">Isr dietas</label>
                       </div>
                       <div class="form-check form-check-inline">
                       <input class="form-check-input" type="checkbox" id="timbre" name="timbre" value="timbre">
                       <label class="form-check-label" for="inlineCheckbox2">Timbre</label>
                       </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Isr salario</label>
                        <input type="text" class="form-control" placeholder="Isr salario" minlength="3" maxlength="6"  name="isrsalario" id="isrsalario" pattern="^[0-9]{1,30}">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dietas</label>
                        <input type="text" class="form-control" placeholder="Dietas" minlength="3" maxlength="6"  name="dietas" id="dietas" pattern="^[0-9]{1,30}">
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
                  <input type="submit" value="Guardar" class="btn btn-primary " name="btnGuardarEmpleado" id="btnGuardarEmpleado">
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

<!--departamentos-->
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

<!--dependencia -->
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
    $('#btnGuardarEmpleado').click(function() {

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

<script src="../js/eventocargo.js"></script>
<script src="../js/eventodireccion.js"></script>
<script type="text/javascript">