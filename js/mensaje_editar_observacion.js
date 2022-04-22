function observacion_editar_msj(e) {

    if (confirm("¿Estás seguro que deseas editar la observacion?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete26 = document.querySelectorAll("#btnEditarObservacion");

for (var i = 0; i < linkDelete26.length; i++) {
    linkDelete26[i].addEventListener('click', observacion_editar_msj);
}