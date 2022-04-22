function editar_usuario_msj(e) {

    if (confirm("¿Estás seguro que deseas editar el usuario?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete2 = document.querySelectorAll("#btnEditar");

for (var i = 0; i < linkDelete2.length; i++) {
    linkDelete2[i].addEventListener('click', editar_usuario_msj);
}