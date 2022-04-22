<?php

include('layout/header.php');

?>

<title>Municipalidad | Gualán</title>
  <!-- Tell the browser to be responsive to screen width -->

<?php

include('layout/nav.php');

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
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
          <!-- left column -->
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Editar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    
             
<!-- /.codigo php para la instancia -->

              <?php  
                        
                        $usuario = new Usuario();
                        $id=$_REQUEST['id'];
                        $resultado = $usuario->buscarUsuario($id);

                        $nombre = $resultado->getNombre();
                        $apellido = $resultado->getApellido();
                        $nickname = $resultado->getNickname();
                        $permiso = $resultado->getRol();
                        $contrasena = $resultado->getContrasena();
                        ?>

              <form role="form" method="POST" action="../crud/editarUsuario.php?id=<?php echo $id;?>">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre</label>
                        
                        <?php

                        echo "
                        <input type='text' class='form-control' placeholder='Nombre' value='$nombre' name='nombre' id='nombre'
                        pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='3' maxlength='25'>";
                                  
                      //<!-- /.codigo php para la instancia -->?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Apellido</label>
                        <?php

                        echo "
                        <input type='text' class='form-control'placeholder='Apellido' value='$apellido' name='apellido' id='apellido'
                        required pattern='^[a-zA-Záéíóú ]{1,30}' required minlength='3' maxlength='20'>";
                                    
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Usuario</label>
                        <?php

                        echo "
                        <input type='text' class='form-control' placeholder='Usuario' value='$nickname' minlength='3' maxlength='9' required name='usuario' id='usuario' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}'>";
//<!-- /.codigo php para la instancia -->
                          ?>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Permiso</label>
                        <select class="form-control" id="permiso" name="permiso">
                          
                                     
                        <?php
                          
                          if(strcmp($permiso, "Usuario") === 0){
                          echo "<option>Usuario</option>";
                          echo "<option>Administrador</option>";
                          }

                          if(strcmp($permiso, "Administrador") === 0){
                            echo "<option>Administrador</option>";
                            echo "<option>Usuario</option>";
                            }

                          ?>

                        </select>
            
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Contraseña</label>
                        

                        <?php
                        
                        echo"<input type='password' class='form-control' placeholder='Contraseña' value='$contrasena' name='contrasena' id='contrasena' minlength='4 maxlength='8' pattern='^[a-zA-Záéíóú0-9.,_- ]{1,30}' required>";
                        
                        ?>
                      
                        </div>
                    </div>
                  </div>  
                  <div class="">
                  <input type="submit" value="Editar" class="btn btn-primary" name="btnEditar" id="btnEditar">
                  <a type="submit" class="btn btn-danger" href="usuario.php">Regresar</a>
                </div>     
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php

include('layout/footer.php');

?>

<script type="text/javascript">
$(function() {
    $('#btnEditar').click(function() {

        var valid = this.form.checkValidity();
        if (valid) {
          //alert('!Efectuando Guardado!');
   
        } else {
            alert('Debe de rellenar los campos');
        }

        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var usuario = $('#usuario').val();
        var permiso = $('#permiso').val();
        var contrasena = $('#contrasena').val();

    });

});
</script>