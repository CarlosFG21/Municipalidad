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
              <div class="row">
              <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Mes de planilla</label>
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

                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Renglon</label>
                        <select class="form-control" name="cbRenglon" id="cbRenglon">
                        <option value="" disabled="disabled" selected>Seleccione un renglon</option>
                        <?php
                        while($row = mysqli_fetch_array($renglon_resultado)){

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
                  <input type="submit" value="Generar planilla" class="btn btn-primary " name="btnGenerarPlanilla" id="btnGenerarPlanilla">
                  <input type="submit" value="Exportar PDF" class="btn btn-primary " name="btnExportarPdf" id="btnExportarPdf">
                  <input type="submit" value="Buscar" class="btn btn-primary " name="btnBuscar" id="btnBuscar">
                </div> 

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