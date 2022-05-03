<!--<div class="modal fade" id="modaleliminarempleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../crud/eliminarEmpleado.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Ingrese fecha de egreso</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" value="<?php  echo $id; ?>" id="id" name="id" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger" id="btnEliminarUsuario" name="btnEliminarUsuario">Eliminar</button>
      </div>
    </div>
  </div>
</div>-->

<div class="modal fade" id="modaldevolverempleado<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reactivar empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="../crud/devolverEmpleado.php">
                    
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fecha de ingreso</label>
                        <input type="date" class="form-control" placeholder="Ingrese la fecha a egresar" id="fechamm" name="fechamm" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="<?php echo $id ?> " id="id" name="id">
                    </div>

                    <div class="modal-footer">
                        <input type="submit" value="Reactivar" class="btn btn-danger" name="btnDevolverE" id="btnDevolverE">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" name="btnCancelarD" id="btnCancelarD">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>