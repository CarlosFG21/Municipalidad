$(document).ready(function() {
    $("#cbEmpleado").change(function() {
        $("#cbEmpleado option:selected").each(function() {
            id_empleado = $(this).val();
            $.post("../crud/getPlanilla.php", { id_empleado: id_empleado }, function(data) {
                $("#cbPlanilla").html(data);
            });
        });
    })
});