function editar_empleado_msj(e) {

    if (confirm("¿Estás seguro que deseas editar el empleado?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete19 = document.querySelectorAll("#btnEditarEmpleado");

for (var i = 0; i < linkDelete19.length; i++) {
    linkDelete19[i].addEventListener('click', editar_empleado_msj);
}