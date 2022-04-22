function empleado_eliminar_msj(e) {

    if (confirm("¿Estás seguro que deseas eliminar el empleado?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete17 = document.querySelectorAll("#btnEliminarEmpleado");

for (var i = 0; i < linkDelete17.length; i++) {
    linkDelete17[i].addEventListener('click', empleado_eliminar_msj);
}