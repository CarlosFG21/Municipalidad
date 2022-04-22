function usuario_devolver_msj(e) {

    if (confirm("¿Estás seguro que deseas reactivar el usuario?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete1 = document.querySelectorAll("#btnReactivar");

for (var i = 0; i < linkDelete1.length; i++) {
    linkDelete1[i].addEventListener('click', usuario_devolver_msj);
}