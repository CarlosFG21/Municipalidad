<?php
  include("../clases/Empleado.php");
  include("../db/Conexion.php");
  include("../clases/Observacion.php");
                   
?>

<div class="col-sm-6">
<!-- text input -->
<div class="form-group">
  <label>IDENTIFICADOR</label>
  <?php
  
  $idMostrar = $_REQUEST['id'];
  echo "<input type='text' class='form-control' placeholder='$idMostrar'  disabled>";
  ?>
</div>
</div>

<div class="col-sm-6">
<!-- text input -->
<div class="form-group">
  <label>Nombres</label>
  <?php

                        $empleado = new Empleado();
                        $idvista = $_REQUEST['id'];
                        $resultado = $empleado->empleadoVer($idvista);

                        $nombre = $resultado->getNombre();
                        $apellido = $resultado->getApellido();
                        $cargo = $resultado->getNombrecar();
                        $dependencia = $resultado->getNombrede();
                        
                       echo "<input type='text' class='form-control' placeholder='$nombre'  disabled>";
                      ?>
  </div>
</div>  
<div class="col-sm-6">
<!-- text input -->
<div class="form-group">
  <label>Apellidos</label>
  <?php
  echo "<input type='text' class='form-control' placeholder='$apellido'  disabled>";
  ?>
</div>
</div>
<div class="col-sm-6">
<!-- text input -->
<div class="form-group">
  <label>Dependencia</label>
  <?php
  echo "<input type='text' class='form-control' placeholder='$dependencia '  disabled>";
  ?>
</div>
</div>
<div class="col-sm-6">
<!-- text input -->
<div class="form-group">
  <label>Cargo</label>
  <?php
  echo "<input type='text' class='form-control' placeholder='$cargo'  disabled>";
  ?>
</div>
</div>
