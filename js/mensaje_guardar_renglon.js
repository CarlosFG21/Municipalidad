function guardar_renglon_msj(e) {

    if (confirm("¿Estás seguro que deseas guardar el renglon?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete12 = document.querySelectorAll("#btnGuardarRenglon");

for (var i = 0; i < linkDelete12.length; i++) {
    linkDelete12[i].addEventListener('click', guardar_renglon_msj);
}