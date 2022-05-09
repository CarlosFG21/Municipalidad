<?php

include("../clases/Pago.php");
include("../db/Conexion.php");

?>

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
                       <td>$dependencia</td>
                       <td>$mes</td>
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
              <!-- /.card-body -->

<?php

    include("layout/librerias_sin_footer.php");

?>