function observacion_devolver_msj(e) {

    if (confirm("¿Estás seguro que deseas reactivar la observacion?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete25 = document.querySelectorAll("#btnReactivarObservacion");

for (var i = 0; i < linkDelete25.length; i++) {
    linkDelete25[i].addEventListener('click', observacion_devolver_msj);
}