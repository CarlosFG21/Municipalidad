<?php

include("layout/header.php");

?>


<?php

include("layout/nav.php");

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<title>Municipalidad | Gualán</title>

<?php

$conexion = new Conexion();
$conexion->conectar();

$sql = "select id_empleado,CONCAT(nombres,' ',apellidos) from empleado where estado=1 ORDER BY nombres ASC";

$empleados = mysqli_query($conexion->db,$sql);

?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pagos</h1>
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
             <div class="alert alert-danger alert-dismissible col-sm-4">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                !El pago a ingresar ya se efectuo.!
              </div>
            <?php
              }
            ?>
              <!-- /.Validacion codigo php -->
              <form role="form" method="post" action="../crud/ingresarPago.php">
                  <div class="row">
                  <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Empleados</label>
                    <select class="form-control select2 " name="cbEmpleado" id="cbEmpleado" style="width: 100%;">
                    <option value="" disabled="disabled" selected>Seleccione un empleado</option>
                    <?php
                            while($row = mysqli_fetch_array($empleados)){
    
                           ?>
                           <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                           <?php }  ?>
                    </select>
                  </div>
                </div> 
                <div class="col-sm-4">
                <!-- text input -->
                <div class="form-group">
                  <label>Planilla</label>
                  <select class="form-control select2" name="cbPlanilla" id="cbPlanilla" style="width: 100%;">
                  <option value="" disabled="disabled" selected>Seleccione una planilla del empleado</option>
                  <?php 
       
                           $conexion = new Conexion();
                           $conexion->conectar();
                           echo "entro a municipio";
    
                          $queryM = "SELECT id_planilla, CONCAT(mes,' ',anio) FROM planilla where id_empleado = '
                          $id_empleado' ORDER BY mes ASC    ";
    
                          $ejecutar = mysqli_query($conexion->db, $queryM);
    
    
                          while($row = mysqli_fetch_array($ejecutar)){
     
                          echo $html = "<option value=".$row[0].">".$row[1]."</option>";
    
                            }
    
                            
    
                                ?>
                  </select>
                </div>
                </div>     
                <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label>Forma de pago</label>
              <select class="form-control" name="forma" id="forma">
                <option>Acreditamiento</option>
                <option>Cheque</option>
              </select>
            </div>
            </div>
            <div class="col-sm-4">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" placeholder="Descripcion" minlength="4" maxlength="8" required name="descripcion" id="descripcion" pattern="^[a-zA-Záéíóú]{1,30}">
                  </div>
                </div>              
                     <div id="select2lista" class="row"> 
                  <!--Aquí se recargan los datos del cliente-->                    
                  
                            
                </div>
                 <div id="prueba">

                </div>
                </div> 
                  
                <div class="">
                <input id="txtId" type="hidden" name="txtId" type="text" class="form-control" placeholder="" value="0">
                <input type="submit" value="Guardar" class="btn btn-primary" name="btnGuardarPago" id="btnGuardarPago">
                  <a type="submit" class="btn btn-danger" href="pago.php">Regresar</a>
                </div>  
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

<script>
  $(document).ready(function(){
    $("#cbEmpleado").change(function () { 	

      document.getElementById("txtId").value = "";
   
      $("#cbEmpleado option:selected").each(function () {
        id_empleado = $(this).val();
            
        $.post("../crud/getPlanilla.php", {  id_empleado:  id_empleado }, function(data){
          $("#cbPlanilla").html(data);
        });            
      });
    })
  });
</script>

<script>
  $(document).ready(function(){
    $("#cbPlanilla").change(function () { 	
      var index =  document.getElementById("cbPlanilla").selectedIndex;
      if (index == 0){
        document.getElementById("txtId").value = "";
      }
    })
  });
</script>

<script src="../js/eventoplanilla.js"></script>

<script type="text/javascript">

function recargarLista(){
    
    //------------Para cargar los datos del cliente seleccionado
    $.ajax({
        type:"POST",
        url:"cargarEmpleadoPago.php?id=" + $ ('#cbPlanilla').val() ,
        //data:"id="+ $ ('#lista1').val(),
        success:function(r){
            $('#select2lista').html(r);
        }
    
    });

}
</script>

<script type="text/javascript">
$(document).ready(function(){

    //recargarLista();

    $('#cbPlanilla').change(function(){
     recargarLista();
    });

});
</script>

<script type="text/javascript">
$(function() {
    $('#btnGuardarPago').click(function() {

        var valid = this.form.checkValidity();
        if (valid) {
          //alert('!Efectuando Guardado!');
   
        } else {
            alert('Debe de rellenar los campos o coincidir con el formato');
        }

        var nombre = $('#forma').val();
        var apellido = $('#descripcion').val();
        var id = $('#cbEmpleado').val();
       
    });

});
</script>





