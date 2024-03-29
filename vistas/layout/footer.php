<footer class="main-footer">
    <strong>Gobernar es servir &copy; Administracion 2020-2024 <a href="https://munigualan.gob.gt/" target="_blank">Municipalidad de Gualán</a>.</strong>

    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../app/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../app/AdminLTE-3.0.5/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../app/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../app/AdminLTE-3.0.5/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../app/AdminLTE-3.0.5/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../app/AdminLTE-3.0.5/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../app/AdminLTE-3.0.5/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../app/AdminLTE-3.0.5/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../app/AdminLTE-3.0.5/plugins/moment/moment.min.js"></script>
<script src="../app/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../app/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../app/AdminLTE-3.0.5/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../app/AdminLTE-3.0.5/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../app/AdminLTE-3.0.5/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../app/AdminLTE-3.0.5/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../app/AdminLTE-3.0.5/dist/js/demo.js"></script>

<script src="../app/AdminLTE-3.0.5/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../app/AdminLTE-3.0.5/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../app/AdminLTE-3.0.5/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../app/AdminLTE-3.0.5/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- Select2 -->
<script src="../app/AdminLTE-3.0.5/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../app/AdminLTE-3.0.5/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

<script src="../js/usuario_eliminar_msj.js"></script>
<script src="../js/devolver_usuario.js"></script>
<script src="../js/mensaje_edit_usuario.js"></script>
<script src="../js/mensaje_guardar_usuario.js"></script>
<script src="../js/mensaje_guardar_dependencia.js"></script>
<script src="../js/mensaje_edit_dependencia.js"></script>
<script src="../js/dependencia_eliminar.js"></script>
<script src="../js/devolver_dependencia.js"></script>
<script src="../js/mensaje_guardar_cargo.js"></script>
<script src="../js/cargo_eliminar.js"></script>
<script src="../js/mensaje_editar_cargo.js"></script>
<script src="../js/devolver_cargo.js"></script>
<script src="../js/mensaje_guardar_renglon.js"></script>
<script src="../js/mensaje_editar_renglon.js"></script>
<script src="../js/renglon_eliminar.js"></script>
<script src="../js/devolver_renglon.js"></script>
<script src="../js/empleado_eliminar.js"></script>
<script src="../js/devolver_empleado.js"></script>
<script src="../js/mensaje_editar_empleado.js"></script>
<script src="../js/mensaje_guardar_empleado.js"></script>
<script src="../js/mensaje_guardar_observacion.js"></script>
<script src="../js/observacion_eliminar.js"></script>
<script src="../js/devolver_observacion.js"></script>
<script src="../js/mensaje_editar_observacion.js"></script>
<script src="../js/mensaje_guardar_pago.js"></script>
<script src="../js/mensaje_editar_pago.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar ",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
