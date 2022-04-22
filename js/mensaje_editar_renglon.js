function editar_renglon_msj(e) {

    if (confirm("¿Estás seguro que deseas editar el renglon?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete13 = document.querySelectorAll("#btnEditarRenglon");

for (var i = 0; i < linkDelete13.length; i++) {
    linkDelete13[i].addEventListener('click', editar_renglon_msj);
}