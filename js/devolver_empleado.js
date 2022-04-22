function empleado_devolver_msj(e) {

    if (confirm("¿Estás seguro que deseas reactivar el empleado?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete18 = document.querySelectorAll("#btnReactivarEmpleado");

for (var i = 0; i < linkDelete18.length; i++) {
    linkDelete18[i].addEventListener('click', empleado_devolver_msj);
}