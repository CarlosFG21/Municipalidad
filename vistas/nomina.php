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
            <h1>Nominas</h1>
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
                <h3 class="card-title">Generar nomina</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <!-- <div class="form-group">
              <h4>Datos Laborales</h4>
              </div> -->
              <!-- /.Validacion codigo php -->
              <form role="form" method="POST" action="#" id="formdata">
                  <div class="row">
                    <div class="col-sm-5">
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
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                      <label></label>
                      <input id="prodId" name="prodId" type="hidden" value="xm234jq">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                      <label></label>
                      <input id="prodId" name="prodId" type="hidden" value="xm234jq">
                      </div>
                    </div>
                    </div>
                    <br>
                     <div id="select2lista" class="row"> 
                  <!--Aquí se recargan los datos del cliente-->                    
                  
                            
                </div>
                <div id="serviciosCliente"> 
                <!--Aquí se recargan los datos del cliente-->                    
                </div> 
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
        url:"cargarEmpleadoNomina.php?id=" + $ ('#lista1').val() ,
       // data:$("#lista1").serialize(),
        success:function(r){
            $('#select2lista').html(r);
        }
    
    });

    $.ajax({
        type:"POST",
        url:"cargarNominaEmpleado.php?id=" + $ ('#lista1').val() ,
        //data:"id="+ $ ('#lista1').val(),
        success:function(r){
            $('#serviciosCliente').html(r);
        }
    
    });

}
</script>

<script type="text/javascript">
$(document).ready(function(){


    $('#lista1').change(function(){
     recargarLista();
    });

});
</script>