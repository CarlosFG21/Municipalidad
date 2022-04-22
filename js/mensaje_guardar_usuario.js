function guardar_usuario_msj(e) {

    if (confirm("¿Estás seguro que deseas guardar el usuario?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete3 = document.querySelectorAll("#btnGuardarUsuario");

for (var i = 0; i < linkDelete3.length; i++) {
    linkDelete3[i].addEventListener('click', guardar_usuario_msj);
}