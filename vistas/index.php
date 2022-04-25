<?php

include ("layout/header.php");

?>
  <link rel="stylesheet" href="../css/reloj.css" />
  <title>Municipalidad | Gualán</title>
  <!-- Tell the browser to be responsive to screen width -->
 
<?php

include ("layout/nav.php");

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tablero</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="https://munigualan.gob.gt/" target="_blank">Gobernar es servir, Municipalidad de Gualán</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                $conexion = new Conexion();
                $conexion->conectar();
                $sql = "select id_empleado from empleado where estado=1";
                $resultado = mysqli_query($conexion->db,$sql);
                $row = mysqli_num_rows($resultado);
                echo "<h3>$row</h3>";
                ?>
                <p>Empleados</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-tie"></i>
              </div>
              <a href="empleado.php" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                  $conexion = new Conexion();
                  $conexion->conectar();
                  $sql = "select id_dependencia from dependencia where estado=1";
                  $resultado = mysqli_query($conexion->db,$sql);
                  $row = mysqli_num_rows($resultado);
                  echo "<h3>$row</h3>";
              ?>
                <p>Dependencias</p>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="dependencia.php" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                 <?php
                 $conexion = new Conexion();
                 $conexion->conectar();
                 $sql = "select id_renglon from renglon renglon where estado=1";
                 $resultado = mysqli_query($conexion->db,$sql);
                 $row = mysqli_num_rows($resultado);
                 echo "<h3>$row</h3>";
                 ?>
                <p>Renglones</p>
              </div>
              <div class="icon">
                <i class="fas fas fa-clone"></i>
              </div>
              <a href="renglon.php" class="small-box-footer">Más información<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <?php
                //<!-- Codigo php quitado -->
                $conexion = new Conexion();
                $conexion->conectar();
                $sql = "SELECT id_usuario FROM usuario WHERE estado=1";
                $resultado = mysqli_query($conexion->db,$sql);
                $row = mysqli_num_rows($resultado);

                echo "<h3>$row</h3>";
               ?>       
                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-alt"></i>
              </div>
              <a href="usuario.php" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        <!--reloj-->
        <div class="contenedor">
        <div class="widget">
        
        
        </div>
        </div>
        </div>
          <!-- Left col -->
          <section class="content">
          <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
              <h1 style="text-align:center">Gobernar es servir</h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div align="center"><img src = "../img/muni11-copia.jpg" alt = "texto descriptivo" align="center"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
          

          
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php

include ("layout/footer.php");

?>

