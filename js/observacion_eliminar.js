function observacion_eliminar_msj(e) {

    if (confirm("¿Estás seguro que deseas eliminar la observacion?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete23 = document.querySelectorAll("#btnEliminarObservacion");

for (var i = 0; i < linkDelete23.length; i++) {
    linkDelete23[i].addEventListener('click', observacion_eliminar_msj);
}