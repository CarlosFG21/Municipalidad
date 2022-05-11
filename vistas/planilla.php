<?php 

include('layout/header.php');

?>

<title>Municipalidad | Gualán</title>
  <!-- Tell the browser to be responsive to screen width -->

<?php 

include('layout/nav.php');

?>

<?php

 $conexion = new Conexion();
 $conexion->conectar();
 $sql = "select id_dependencia,nombre from dependencia where estado=1 order by nombre asc";
 $resultado = mysqli_query($conexion->db,$sql);

?>

<?php

$conexion = new Conexion();
$conexion->conectar();
$renglon = "select id_renglon,nombre from renglon where estado=1 order by nombre asc";
$renglon_resultado = mysqli_query($conexion->db,$renglon);

?>

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
          <div class="col-md-12">
          
            <div class="card">
              <div class="card-header">
              <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'guardar'){
              ?>
               <div class="alert alert-success col-sm-6" role="alert" >
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h4 class="alert-heading">Guardado!</h4>
               <p>La planilla de los empleados a sido generada.</p>
               <hr>
               <p class="mb-0">Dado el caso se encuentre un dato ya genera este no se volvera a registrar.</p>
             </div>
              <?php
                }
              ?>
              <form role="form" method="post" action="../crud/ingresarPlanilla.php">
              <div class="row">
              <div class="col-sm-3">
                      <!-- text input -->
              <div class="form-group">
                        <label>Filtro de busqueda</label>
                        <select class="form-control" name="filtro" id="filtro">
                          <option value="">Seleccionar un tipo de filtro</option>
                          <option value="0">Todos los pagos</option>
                          <option value="1">Por empleado</option>
                          
                        </select>
                      </div>
              </div>
              <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Mes de planilla</label>
                        <select class="form-control" name="mes" id="mes">
                        <option value="" disabled="disabled" selected>Seleccione un mes</option>
                          <option value="Enero">Enero</option>
                          <option value="Febrero">Febrero</option>
                          <option value="Marzo">Marzo</option>
                          <option value="Abril">Abril</option>
                          <option value="Mayo">Mayo</option>
                          <option value="Junio">Junio</option>
                          <option value="Julio">Julio</option>
                          <option value="Agosto">Agosto</option>
                          <option value="Septiembre">Septiembre</option>
                          <option value="Octubre">Octubre</option>
                          <option value="Noviembre">Noviembre</option>
                          <option value="Diciembre">Diciembre</option>
                        </select>
                      </div>
                    </div>
                    <?php
                    $Date = date("d-m-Y");  
                    $year = date("Y");


                    echo "<div class='col-sm-3'>
                    
                    <div class='form-group'>
                      <label>Año de planilla</label>
                      <select class='form-control' name='anio' id='anio'>";
                      

                        for($i=$year;$i>=1990;$i--) { 
                          echo "<option value='".$i."'>".$i."</option>";
                        }
                        
                    echo "</select>";
                    echo "</div>";
                    echo "</div>";


                   ?>

                   <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dependencia</label>
                        <select class="form-control select2" name="cbDependencia" id="cbDependencia">
                        <option value="" disabled="disabled" selected>Seleccione una dependencia</option>
                        <?php
                        while($row = mysqli_fetch_array($resultado)){

                       ?>
                       <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                       <?php }  ?>
                        </select>
                      </div>
                    </div>

                    <!--aqui termina el row-->
                    </div>     <!--aqui termina el row-->
                <div class="">
                <a type="submit" class="btn btn btn-success" href="planilla_ingresar.php"> <i class="nav-icon fas fa-plus"> Ingresar planilla especifica</i></a>
                  <input type="submit" value="Generar planilla" class="btn btn-primary " name="btnGenerarPlanilla" id="btnGenerarPlanilla" onclick="obtener()">
                  <input type="submit" value="Buscar" class="btn btn-primary " name="btnBuscar" id="btnBuscar">
                </div> 
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Mes</th>
                  <th>Año</th>
                  <th>Salario</th>
                  <th>Bonificacion</th>
                  <th>Otros</th>
                  <th>Igss</th>
                  <th>Plan</th>
                  <th>Fianza</th>
                  <th>Judicial</th>
                  <th>Timbre</th>
                  <th>Dietas</th>
                  <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Cargo</th>
                  <th>Mes</th>
                  <th>Año</th>
                  <th>Salario</th>
                  <th>Bonificacion</th>
                  <th>Otros</th>
                  <th>Igss</th>
                  <th>Plan</th>
                  <th>Fianza</th>
                  <th>Judicial</th>
                  <th>Timbre</th>
                  <th>Dietas</th>
                  <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
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
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    });
</script>

<script>
  function obtener(){
      var estado = $("#mes").val();
      if (estado==null) {
        alert("Seleccione un mes");
      }
  }
</script>

