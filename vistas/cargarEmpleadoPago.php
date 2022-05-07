<?php
  include("../clases/Empleado.php");
  include("../db/Conexion.php");
  include("../clases/Planilla.php");
                   
?>

         <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sueldo base</label>
                        <?php
                        $id= $_REQUEST['id'];
                        $planilla = new Planilla();
                        $resultado = $planilla->mostraPlanillaPago($id);
                        $sueldob = $resultado->getSalario();
                        $dieta = $resultado->getDietapp();
                        $ingreso= $resultado->getIngresot();
                        $totald= $resultado->getTotald();
                        $sueldore = $resultado->getSarioreci();
                       echo "<input type='text' class='form-control' placeholder='$sueldob' value='' name='sueldo_base' id='sueldo_base' disabled>";
                      ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dietas</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$dieta' value='' minlength='4' maxlength='8' required name='ingreso_total' id='ingreso_total' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ingreso total</label>
                        <?php 
                        echo "
                        <input type='text' class='form-control' placeholder='$ingreso' value='' minlength='4' maxlength='8' required name='total_descuento' id='total_descuento' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Total descuento</label>
                        <?php 
                    
                        echo "
                        <input type='text' class='form-control' placeholder='$totald' value='' minlength='4' maxlength='8' required name='sueldo_recibido' id='sueldo_recibido' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sueldo recibido</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$sueldore' value='' placeholder='Sueldo recibido' minlength='4' maxlength='8' required name='sueldo_recibido' id='sueldo_recibido' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                  </div> 
                  