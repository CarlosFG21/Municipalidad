function guardar_observacion_msj(e) {

    if (confirm("¿Estás seguro que deseas guardar la observacion?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete22 = document.querySelectorAll("#btnGuardarObservacion");

for (var i = 0; i < linkDelete22.length; i++) {
    linkDelete22[i].addEventListener('click', guardar_observacion_msj);
}