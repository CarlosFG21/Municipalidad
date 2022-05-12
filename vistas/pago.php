<?php 

include('layout/header.php');

?>

<title>Municipalidad | Gualán</title>
  <!-- Tell the browser to be responsive to screen width -->

<?php 

include('layout/nav.php');

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
          <div class="col-md-12">
          
            <div class="card">
              <div class="card-header">
              <div class="row">
              <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Buscar y seleccionar empleado</label>
                        <select class="form-control selectEmpleado" id="lista2" name="lista2">
                        <option value="0">Seleccionar empleado</option>
                        <?php
                         $datosEmpleado = new Empleado();
                         $resultado =  $datosEmpleado->mostraEmpleados2();
                         for($i=0; $i<sizeof($resultado); $i++){
                             $idConsultado =  $resultado[$i]->getidEmpleado();
                             $nombres = $resultado[$i]->getNombre();
                             $apellidos = $resultado[$i]->getApellido();


                             echo "<option value='$idConsultado'>". "". $nombres . " " . $apellidos . "". "</option>";

                         }
                          
                        ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Filtro de búsqueda</label>
                        <select class="form-control" name="filtro" id="filtro">
                          <option value="">Seleccionar un tipo de filtro</option>
                          <option value="0">Todos los pagos</option>
                          <option value="1">Por empleado</option>
                          
                        </select>
                      </div>
                    </div>

                    <!--aqui termina el row-->
                    </div>     <!--aqui termina el row-->
                <div class="">
                <a type="submit" class="btn btn btn-success" href="pago_ingresar.php"> <i class="nav-icon fas fa-plus"> Ingresar pago</i></a>
                  <input type="button" value="Buscar" class="btn btn-primary " name="btnBuscar" id="btnBuscar">
                </div> 

              </div>
              <!-- /.card-header -->
              <div id="tablaresultados">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Dependencia</th>
                  <th>Mes</th>
                  <th>Año</th>
                  <th>Forma de pago</th>
                  <th>Descripcion</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                   
                   $pago = new Pago();
                   $resultado = $pago->MostrarPagos();

                   for($i=0;  $i<sizeof($resultado); $i++){

                    $id = $resultado[$i]->getIdpago();
                    $nombre =  $resultado[$i]->getNombres();
                    $apellido =  $resultado[$i]->getApellido();
                    $completo = $nombre.' '.$apellido;
                    $cargo = $resultado[$i]->getCargo();
                    $dependencia =  $resultado[$i]->getDependencia();
                    $mes =  $resultado[$i]->getMes();
                    $anio = $resultado[$i]->getAnio();
                    $forma = $resultado[$i]->getForma();
                    $descripcion  = $resultado[$i]->getDescripcion();
                    $estado = $resultado[$i]->getEstado();

                    echo "<tr>";
                    
                    echo "<td>$id</td>
                          <td>$completo</td>
                          <td>$cargo</td>
                          <td>$dependencia</td>";
                          if($mes==1){
                            echo "<td>Enero</td>";
                            }
                            if($mes==2){
                              echo "<td>Febrero</td>";
                            }
                            if($mes==3){
                              echo "<td>Marzo</td>";
                            }
                            if($mes==4){
                              echo "<td>Abril</td>";
                            }
                            if($mes==5){
                              echo "<td>Mayo</td>";
                            }
                            if($mes==6){
                              echo "<td>Junio</td>";
                            }
                            if($mes==7){
                              echo "<td>Julio</td>";
                            }
                            if($mes==8){
                              echo "<td>Agosto</td>";
                            }
                            if($mes==9){
                              echo "<td>Septiembre</td>";
                            }
                            if($mes==10){
                              echo "<td>Octubre</td>";
                            }
                            if($mes==11){
                              echo "<td>Noviembre</td>";
                            }
                            if($mes==12){
                              echo "<td>Diciembre</td>";
                            }
                          echo"
                          <td>$anio</td>
                          <td>$forma</td>
                          <td>$descripcion</td>
                          ";
                    
                          if($estado == 1){
                            echo "<td><h4><span class='badge bg-success'>Pagado</span></h4></td>";
                          }else{
                            echo "<td><h4><span class='badge bg-success'>No pagado</span></h4></td>";
                          }
                          echo "<td>
                               <a type='submit' href='pago_editar.php?id=$id' class='btn btn-warning'>
                              <i class='fa fa-edit'></i>
                              </a>"; 

                          echo "<a type='submit' href='pago_vista.php?id=$id'class='btn bg-gradient-primary'>
                                <i class='fas fa-eye'></i> 
                                </a></td>";

                    echo "</tr>";
                   }

                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Dependencia</th>
                  <th>Mes</th>
                  <th>Año</th>
                  <th>Forma de pago</th>
                  <th>Descripcion</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php 

include('layout/footer.php');

?>


  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.selectEmpleado').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    });

    /*$( ".select2" ).change(function() {
     //Aquí cargamos el usuario
    });*/
    </script>

<script type="text/javascript">

function mostrarTodos(){
  $.ajax({
        type:"POST",
        url:"busqueda_pago_todos.php",
        //data:"id="+ $ ('#lista1').val(),
        success:function(r){
            $('#tablaresultados').html(r);
        }
    
    });
}

function filtrarPorEmpleado(){
     
    $.ajax({
        type:"POST",
        url:"busqueda_pago_empleado.php?id=" + $ ('#lista2').val() ,
        //data:"id="+ $ ('#lista1').val(),
        success:function(r){
            $('#tablaresultados').html(r);
        }
    
    });

}


</script>

<script type="text/javascript">
    $(document).ready(function(){
    
      
        $('#btnBuscar').click(function(){
        //Llamamos a la función
        //alert("haz hecho click en el boton btnBuscar");
        var idEmpleado = document.getElementById('lista2').value;
        var filtro = document.getElementById('filtro').value;
  
       //------------Filtro todos------------------------------------------------------
       if(filtro==0){
         mostrarTodos();
       }
       //------------Filtro solo por cliente--------------------------
      if(filtro==1){
        
        if(idEmpleado!=0){
        
          filtrarPorEmpleado();
        
        }else{
          
          alert('Debes seleccionar un empleado primero');
          
        }
      }

        });

    });
</script>






