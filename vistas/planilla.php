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
               <p class="mb-0">Dado el caso se encuentre un dato ya generado este no se volvera a registrar.</p>
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
                          <option value="0">Todas las planillas</option>
                          <option value="1">Por dependencia</option>
                          
                        </select>
                      </div>
              </div>
              <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Mes de planilla</label>
                        <select class="form-control" name="mes" id="mes">
                        <option value="" disabled="disabled" selected>Seleccione un mes</option>
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
                  <th>Mes</th>
                  <th>Anio</th>
                  <th>Cargo</th>
                  <th>Renglon</th>
                  <th>Fecha I.</th>
                  <th>Fecha E.</th>
                  <th>Dpi</th>
                  <th>No.Cuenta</th>
                  <th>No.Igss</th>
                  <th>Dependencia</th>
                  <th>No.Exp</th>
                  <th>Salario</th>
                  <th>Boni.</th>
                  <th>Otros</th>
                  <th>Dietas</th>
                  <th>Ingreso</th>
                  <th>Igss</th>
                  <th>Plan</th>
                  <th>Fianza</th>
                  <th>Judicial</th>
                  <th>Timbre</th>
                  <th>Isr D.</th>
                  <th>Isr S.</th>
                  <th>Total D.</th>
                  <th>Sueldo R.</th>
                  </tr>
                  </thead>
                  <tbody>
                
                  <?php
                   
                   $planilla = new Planilla();
                   $resultado = $planilla->mostrarPlanitasTodas();

                   for($i=0;  $i<sizeof($resultado); $i++){
                    echo "<tr>"; 
                    $id = $resultado[$i]->getidPlanill();
                    $nombre = $resultado[$i]->getNombrep();
                    $apellido = $resultado[$i]->getApellidop();
                    $completo = $nombre.' '.$apellido;
                    $mes = $resultado[$i]->getMes();
                    $anio = $resultado[$i]->getAnio();
                    $cargo =  $resultado[$i]->getNombrecarp();
                    $renglon = $resultado[$i]->getNombrerep();
                    $fechai = $resultado[$i]->getFechaIngreso();
                    $fechae = $resultado[$i]->getFechaegreso();
                    $dpi = $resultado[$i]->getDpip();
                    $cuenta = $resultado[$i]->getNocuentap();
                    $noigss =  $resultado[$i]->getNoigssp();
                    $dependencia =  $resultado[$i]->getNombredep();
                    $expediente = $resultado[$i]->getNoexpedientep();
                    $salario = $resultado[$i]->getSalario();
                    $boni = $resultado[$i]->getBonip();
                    $otros = $resultado[$i]->getOtrosp();
                    $dietas = $resultado[$i]->getDietapp();
                    $ingreso = $resultado[$i]->getIngresot();
                    $igss =  $resultado[$i]->getIgssp();
                    $plan = $resultado[$i]->getPlanp();
                    $fianza = $resultado[$i]->getFianzap();
                    $judicial = $resultado[$i]->getJudicialp();
                    $timbre = $resultado[$i]->getTimbrep();
                    $isrdieta = $resultado[$i]->getDieta_isrp();
                    $irsalario = $resultado[$i]->getSalario_isrp();
                    $totald = $resultado[$i]->getTotald();
                    $sueldo = $resultado[$i]->getSarioreci();
          

                    
                    
                    echo "<td>$id</td>
                    <td>$completo</td>";


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
                    echo "
                    <td>$anio</td>
                    <td>$cargo</td>
                    <td>$renglon</td>
                    <td>$fechai</td>
                    <td>$fechae</td>
                    <td>$dpi</td>
                    <td>$cuenta</td>
                    <td>$noigss</td>
                    <td>$dependencia</td>
                    <td>$expediente</td>
                    <td>$salario</td>
                    <td>$boni</td>
                    <td>$otros</td>
                    <td>$dietas</td>
                    <td>$ingreso</td>
                    <td>$igss</td>
                    <td>$plan</td>
                    <td>$fianza</td>
                    <td>$judicial</td>
                    <td>$timbre</td>
                    <td>$isrdieta</td>
                    <td>$irsalario</td>
                    <td>$totald</td>
                    <td>$sueldo</td>
                          
                          ";
                    
                          

                    echo "</tr>";
                   }

                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Mes</th>
                  <th>Anio</th>
                  <th>Cargo</th>
                  <th>Renglon</th>
                  <th>Fecha I.</th>
                  <th>Fecha E.</th>
                  <th>Dpi</th>
                  <th>No.Cuenta</th>
                  <th>No.Igss</th>
                  <th>Dependencia</th>
                  <th>No.Exp</th>
                  <th>Salario</th>
                  <th>Boni.</th>
                  <th>Otros</th>
                  <th>Dietas</th>
                  <th>Ingreso</th>
                  <th>Igss</th>
                  <th>Plan</th>
                  <th>Fianza</th>
                  <th>Judicial</th>
                  <th>Timbre</th>
                  <th>Isr D.</th>
                  <th>Isr S.</th>
                  <th>Total D.</th>
                  <th>Sueldo R.</th>
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

