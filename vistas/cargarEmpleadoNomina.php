<?php
  include("../clases/Empleado.php");
  include("../db/Conexion.php");
  include("../clases/Planilla.php");
                   
?>

<div class="">
                 <h3>Datos Personales</h3>
                 <hr style="width:75%; height:5px; 
                 width: 165%;
                 display: inline-block;">
                </div>
                <div class="row">
                <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre</label>
                        <?php
                        $planilla = new Planilla();
                        $id = $_REQUEST['id'];
                        $resultado =  $planilla->nominaEmpleadoPlanilla($id);
                        $nombre = $resultado->getNombrep();
                        $apellido = $resultado->getApellidop();
                        $completo = $nombre." ".$apellido;
                        $dpi = $resultado->getDpip();
                        $nit =  $resultado->getNitp();
                        $telefono =  $resultado->getTelefonop();
                        $municipio = $resultado->getNombremup();
                        $departamento = $resultado->getNombreDept();
                        $direccion = $municipio.",".$departamento;
                        $fechan = $resultado->getFecha_nacimientop();
                        $figss= $resultado->getNoigssp();
                        $cuenta = $resultado->getNocuentap();
                        $expediente = $resultado->getNoexpedientep();
                        $renglon = $resultado->getidRenglonp();
                        $dependencia = $resultado->getNombredep();
                        $cargo =  $resultado->getNombrecarp();
                        $fechaingreso = $resultado->getFechaIngreso();
                        $forma = $resultado->getFopagop();
                        $salario = $resultado->getSalario();
                        $bonificacion = $resultado->getBonip();
                        $otro = $resultado->getOtrosp();
                        $igss = $resultado->getIgssp();
                        $estado = $resultado->getEstado();
                        $plan = $resultado->getPlanp();
                        $fianza = $resultado->getFianzap();
                        $judicial = $resultado->getJudicialp();
                        $timbre =  $resultado->getTimbrep();
                        $dietas = $resultado->getDietapp();
                        $salarioisr = $resultado->getSalario_isrp();
                        $isrdieta = $resultado->getDieta_isrp();
                        $ingresot =  $resultado->getIngresot();
                        $totald = $resultado->getTotald();
                        $sueldol =  $resultado->getSarioreci();
                        echo "
                        <input type='text' class='form-control' placeholder='$completo ' name='apellido' id='apellido'
                        pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='1' maxlength='50' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dpi</label>
                        <?php
                        echo"
                        <input type='text' class='form-control' placeholder='$dpi' minlength='3' maxlength='9' required name='dpi' id='dpi' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nit</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$nit' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Telefono</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$telefono' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Direccion</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$direccion' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha nacimiento</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$fechan' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Afiliacion igss</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$figss' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cuenta bancaria</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$cuenta' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No. Expediente</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$expediente' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Estado</label>
                        <?php
                        if($estado == 1){
                          echo "
                        <input type='text' class='form-control' placeholder='Activo' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        }else{
                          echo "
                        <input type='text' class='form-control' placeholder='Inactivo' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";    
                        }
                        ?>
                      </div>
                    </div> 
                </div> <!---terminacion del row --> 
                <!--inicializacion del row--> 
                <div class="">
                 <h3>Datos Laborales</h3>
                 <hr style="width:75%; height:5px; 
                 width: 165%;
                 display: inline-block;">
                </div>
                <div class="row">
                <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Renglon</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$renglon' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dependencia</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$dependencia' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div> 
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Cargo</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$cargo' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>   
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fecha de ingreso</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$fechaingreso' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Forma de pago</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$forma' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>  
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Salario</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$salario' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bonificacion</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$bonificacion' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Otros</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$otro' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Igss</label>
                        <?php
                         echo "
                         <input type='text' class='form-control' placeholder='$igss' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";            
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Plan</label>
                        <?php
                         echo "
                         <input type='text' class='form-control' placeholder='$plan' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fianza</label>
                        <?php
                         echo "
                         <input type='text' class='form-control' placeholder='$fianza' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judicial</label>
                        <?php 
                         echo "
                         <input type='text' class='form-control' placeholder='$judicial' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Timbre</label>
                        <?php 
                        echo "
                        <input type='text' class='form-control' placeholder='$timbre' minlength='3' maxlength='9' required name='nit' id='nit' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' disabled>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dietas</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$isrdieta' minlength='4' maxlength='8' required name='dietas' id='dietas' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Salario isr</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$salarioisr' minlength='4' maxlength='8' required name='salario_isr' id='salario_isr' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Isr dietas</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$dietas' minlength='4' maxlength='8' required name='isr_dieta' id='isr_dietas' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ingreso total</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$ingresot' placeholder='Ingreso total' minlength='4' maxlength='8' required name='ingreso_total' id='ingreso_total' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Total descuento</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$totald' placeholder='Total descuento' minlength='4' maxlength='8' required name='total_descuento' id='total_descuento' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sueldo recibido</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' placeholder='$sueldol' placeholder='Sueldo recibido' minlength='4' maxlength='8' required name='sueldo_recibido' id='sueldo_recibido' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    </div>
                