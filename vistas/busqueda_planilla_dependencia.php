<?php

include("../clases/Planilla.php");
include("../db/Conexion.php");
$encabezado="Total";
$total_salario =0;
$total_boni = 0;
$total_otros = 0;
$total_dietas =  0;
$ingreso_total = 0;
$total_igss = 0;
$total_plan =0;
$total_fianza = 0;
$total_judicial =  0;
$total_timbre = 0;
$total_isr_dietas= 0;
$total_isr_salario = 0;
$total_descuento = 0;
$total_sueldr = 0;
?>

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
                   $mes = $_REQUEST['mes'];
                   $anio = $_REQUEST['anio'];
                   $idp = $_REQUEST['idDep'];
                   $resultado = $planilla->buscarPlanillaDep($mes,$anio,$idp);

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
                    $total_salario +=$salario;
                    $total_boni +=$boni;
                    $total_otros +=$otros;
                    $total_dietas +=$dietas;
                    $ingreso_total +=$ingreso;
                    $total_igss +=$igss;
                    $total_plan +=$plan;
                    $total_fianza +=$fianza;
                    $total_judicial +=$judicial;
                    $total_timbre +=$timbre;
                    $total_isr_dietas +=$isrdieta;
                    $total_isr_salario +=$irsalario;
                    $total_descuento += $totald ;
                    $total_sueldr +=$sueldo;
                    
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
                  <th><?php echo $encabezado;?></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th><?php echo $total_salario; ?></th>
                  <th><?php echo  $total_boni; ?></th>
                  <th><?php echo $total_otros; ?></th>
                  <th><?php echo $total_dietas;?></th>
                  <th><?php echo $ingreso_total;?></th>
                  <th><?php echo $total_igss;?></th>
                  <th><?php echo $total_plan;?></th>
                  <th><?php echo $total_fianza;?></th>
                  <th><?php echo $total_judicial;?></th>
                  <th><?php echo $total_timbre;?></th>
                  <th><?php echo $total_isr_dietas;?></th>
                  <th><?php echo $total_isr_salario;?></th>
                  <th><?php echo $total_descuento;?></th>
                  <th><?php echo $total_sueldr;?></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->

<?php

    include("layout/sin_footer.php");

?>