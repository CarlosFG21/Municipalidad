function editar_dependencia_msj(e) {

    if (confirm("¿Estás seguro que deseas editar la dependencia?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete5 = document.querySelectorAll("#btnEditarDependencia");

for (var i = 0; i < linkDelete5.length; i++) {
    linkDelete5[i].addEventListener('click', editar_dependencia_msj);
}