<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../app/AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
    </ul>

    <ul class="navbar-nav ml-auto"><a class="btn btn-primary" href="../crud/cerrarSesion.php"> <i class="nav-icon fas fa-power-off"> Cerrar sesión</i></a></ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.facebook.com/munigualan2024" target="_blank" class="brand-link">
      <img src="../app/AdminLTE-3.0.5/dist/img/muni.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> Municipalidad</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../app/AdminLTE-3.0.5/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
         <!--  //Incluimos todas las clases-->  
        <?php
        include("../clases/Usuario.php");
        include("../clases/Dependencia.php");
        include("../clases/Cargo.php");
        include("../clases/Renglon.php");
        include("../clases/Empleado.php");
        include("../clases/Observacion.php");
        include("../clases/Planilla.php");
        include("../clases/Pago.php");
        session_start();

        if(isset($_SESSION['usuario'])){
             
        }else{
          header("Location: ../vistas/login.php");
        }

        $usuario = $_SESSION['usuario'];
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();

        echo"<a href='#' class='d-block'>$nombre $apellido</a>";

        ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Tablero
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datos</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-header">ACCIONES</li>
          <li class="nav-item">
            <a href="empleado.php" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Empleados
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="observacion.php?id=0" class="nav-link">
              <i class="nav-icon fa fa-eye"></i>
              <p>
                Observaciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="nomina.php" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Nominas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="planilla.php" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Planilla
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pago.php" class="nav-link">
              <i class="nav-icon fab fa-paypal"></i>
              <p>
                Pagos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pago.php" class="nav-link">
              <i class="nav-icon fas fa-signal"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="renglon.php" class="nav-link">
              <i class="nav-icon fas fa-clone"></i>
              <p>
                Renglones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dependencia.php" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Dependencias
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cargo.php" class="nav-link">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Cargos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="usuario.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>