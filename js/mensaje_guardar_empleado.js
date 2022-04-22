function guardar_empleado_msj(e) {

    if (confirm("¿Estás seguro que deseas guardar el empleado?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete20 = document.querySelectorAll("#btnGuardarEmpleado");

for (var i = 0; i < linkDelete20.length; i++) {
    linkDelete20[i].addEventListener('click', guardar_empleado_msj);
}