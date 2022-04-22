function usuario_eliminar_msj(e) {

    if (confirm("¿Estás seguro que deseas eliminar el usuario?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete0 = document.querySelectorAll("#btnEliminar");

for (var i = 0; i < linkDelete0.length; i++) {
    linkDelete0[i].addEventListener('click', usuario_eliminar_msj);
}