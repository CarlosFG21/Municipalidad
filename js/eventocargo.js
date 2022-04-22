$(document).ready(function() {
    $("#cbDependencia").change(function() {
        $("#cbDependencia option:selected").each(function() {
            id_dependencia = $(this).val();
            $.post("../crud/getCargo.php", { id_dependencia: id_dependencia }, function(data) {
                $("#cbCargo").html(data);
            });
        });
    })
});