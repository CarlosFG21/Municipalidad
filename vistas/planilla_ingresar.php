<?php

include("layout/header.php");

?>


<?php

include("layout/nav.php");

?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<title>Municipalidad | Gualán</title>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Planillas</h1>
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
             <!-- <div class="form-group">
              <h4>Datos Laborales</h4>
              </div> -->
              <!-- /.Validacion codigo php -->
              <form role="form" method="POST" action="#" id="formdata">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Seleccione un empleado</label>
                        <select class="form-control select2" name="lista1" id="lista1">
                        <option value="" disabled="disabled" selected>Seleccione un empleado</option>
                        <?php
                         $empleado = new Empleado();
                         $resultado =  $empleado->mostraEmpleados2();
                         for($i=0; $i<sizeof($resultado); $i++){
                             $idConsultado =  $resultado[$i]->getidEmpleado();
                             
                             $nombres = $resultado[$i]->getNombre();
                             $apellidos = $resultado[$i]->getApellido();


                             echo "<option value='$idConsultado'>"."[". $nombres . " " . $apellidos . "]". "</option>";

                         }
                          
                        ?>  
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Seleccione mes de planilla</label>
                      <select class="form-control" name="mes" id="mes">
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                      </select>
                      </div>
                    </div>
                    <?php
                    $Date = date("d-m-Y");  
                    $year = date("Y");


                    echo "<div class='col-sm-4'>
                    
                    <div class='form-group'>
                      <label>Seleccione año de planilla</label>
                      <select class='form-control' name='anio' id='anio'>";
                      

                        for($i=$year;$i>=1990;$i--) { 
                          echo "<option value='".$i."'>".$i."</option>";
                        }
                        
                    echo "</select>";
                    echo "</div>";
                    echo "</div>";


                   ?>
                     <div id="select2lista" class="row"> 
                  <!--Aquí se recargan los datos del cliente-->                    
                  
                            
                </div>
                 <div id="prueba">

                </div>
                </div> 
                  
                <div class="">
                <input type="button" value="Guardar" class="btn btn-primary" name="btnGuardarPlanilla" id="btnGuardarPlanilla">
                  <a type="submit" class="btn btn-danger" href="planilla.php">Regresar</a>
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

<script type="text/javascript">

function recargarLista(){
    
    //------------Para cargar los datos del cliente seleccionado
    $.ajax({
        type:"POST",
        url:"cargarPlanillaEmpleado.php?id=" + $ ('#lista1').val() ,
        data:$("#form").serialize(),
        success:function(r){
            $('#select2lista').html(r);
        }
    
    });

}


function cargarVentana(){
  $.ajax({
        type:"POST",
        url:"../crud/ingresarPlanilla.php",
        data:$("#formdata").serialize(),
        success:function(r){
            $('#prueba').html(r);
        }
    
    });
}
</script>

<script type="text/javascript">
$(document).ready(function(){

  $('#btnGuardarPlanilla').click(function(){
          
    cargarVentana();

  });

    $('#lista1').change(function(){
     recargarLista();
    });

});
</script>