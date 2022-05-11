<?php
  include("../clases/Empleado.php");
  include("../db/Conexion.php");
  include("../clases/Planilla.php");
                   
?>

<?php

$empleado = new Empleado();
$idvista = $_REQUEST['id'];
$resultado = $empleado->empleadoVer($idvista);

$salario = $resultado->getSalario();
$apellido = $resultado->getApellido();
$cargo = $resultado->getNombrecar();
$dependencia = $resultado->getNombrede();
$boni = $resultado->getBonificacion();
$otros = $resultado->getOtros();
$igsscheck = $resultado->getIgss();
$fianza = $resultado->getFianza();
$judicial = $resultado->getJudicial();
$timbre = $resultado->getTimbre();
$plan = $resultado->getPlan();
$dietas =  $resultado->getDieta_isr();
$isr_s = $resultado->getSalario_isr();
$idempleado = $resultado->getidEmpleado();
$isrdietad = $resultado->getIsrDietasd();
$calculoi=0;
$calculoplan=0;
$calculof=0;
$calculot = 0;
$calculod = 0;
$ingresot= $salario + $boni + $otros + $dietas;
$totald =0;

if($igsscheck == 1){
$calculoi = $salario * 0.0483;
}else{
    $calculoi =0;
}

if($plan == 1){
    $calculoplan = $salario * 0.07;
    }else{
        $calculoplan =0;
}

if($fianza == 1){
    $calculof = $salario * 0.012;
    }else{
        $calculof  =0;
}

if($timbre == 1 && $isrdietad == 1){
    $calculot = $dietas * 0.05;
    }else if($timbre== 1){
        $calculot= $salario * 0.03;
}

if($isrdietad==1){
  $calculod = $dietas * 0.05; 
}else{

}

$totald= $calculoi + $calculoplan + $calculof + $judicial + $calculot + $isr_s +  $calculod;
$sueldor = $ingresot - $totald;

if($sueldor < 0){
    $sueldor = -$sueldor;
}

?>
         <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Salario</label>
                        <?php
                       echo "<input type='text' class='form-control' value='$salario' name='salario' id='salario' disabled>";
                      ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Bonificacion</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' value='$boni' minlength='4' maxlength='8' required name='bonificacion' id='bonificacion' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Otros</label>
                        <?php 
                        echo "
                        <input type='text' class='form-control' value='$otros' minlength='4' maxlength='8' required name='otros' id='otros' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Igss</label>
                        <?php
                        //$calculoi=0;
                        if($igsscheck == 1){
                        //$calculoi = $salario * 0.02;    
                        echo "
                        <input type='text' class='form-control' value='$calculoi' minlength='4' maxlength='8' required name='igss' id='igss' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        }else{
                            echo "
                            <input type='text' class='form-control' placeholder='0.00' minlength='4' maxlength='8' required name='' id='' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Plan</label>
                        <?php
                         //$calculoplan=0;
                        if($plan == 1){
                            //$calculoplan = $salario * 0.025;
                        echo "
                        <input type='text' class='form-control' value='$calculoplan' minlength='4' maxlength='8' required name='plan' id='plan' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        }else{
                            echo "
                            <input type='text' class='form-control' placeholder='0.00' minlength='4' maxlength='8' required name='' id='' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Fianza</label>
                        <?php
                        //$calculof=0;
                        if($fianza==1){
                        //$calculof = $salario * 0.04;    
                        echo "
                        <input type='text' class='form-control' placeholder='' value='$calculof' minlength='4' maxlength='8' required name='fianza' id='fianza' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        }else{
                            echo "
                           <input type='text' class='form-control' placeholder='0.00'  minlength='4' maxlength='8' required name='' id='' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>"; 
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judicial</label>
                        <?php 
                        //$calculoj = 0;
                        
                        //$calculoj = $salario * 0.011;
                        echo "
                        <input type='text' class='form-control' value='$judicial' minlength='4' maxlength='8' required name='judicial' id='judicial' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Timbre</label>
                        <?php 
                        //$calculot = 0;
                        if($timbre == 1){
                        //$calculot = $salario * 0.013;
                        echo "
                        <input type='text' class='form-control' value='$calculot' minlength='4' maxlength='8' required name='timbre' id='timbre' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        }else{
                            echo "
                            <input type='text' class='form-control'placeholder='0.00' minlength='4' maxlength='8' required name='' id='' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        }
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Dietas</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' value='$dietas' minlength='4' maxlength='8' required name='dietas' id='dietas' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Salario isr</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' value='$isr_s' minlength='4' maxlength='8' required name='salario_isr' id='salario_isr' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Isr dietas</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' value='$calculod' minlength='4' maxlength='8' required name='isr_dieta' id='isr_dietas' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ingreso total</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' value='$ingresot' placeholder='Ingreso total' minlength='4' maxlength='8' required name='ingreso_total' id='ingreso_total' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Total descuento</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' value='$totald' placeholder='Total descuento' minlength='4' maxlength='8' required name='total_descuento' id='total_descuento' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sueldo recibido</label>
                        <?php
                        echo "
                        <input type='text' class='form-control' value='$sueldor' placeholder='Sueldo recibido' minlength='4' maxlength='8' required name='sueldo_recibido' id='sueldo_recibido' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <?php
                        echo "
                        <input type='hidden' class='form-control' value='$idempleado' placeholder='Sueldo recibido' minlength='4' maxlength='8' required name='idempleado' id='idempleado' disabled pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
                        ?>
                      </div>
                    </div>
                  </div> 
                  


                  