function guardar_dependencia_msj(e) {

    if (confirm("¿Estás seguro que deseas guardar la dependencia?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete4 = document.querySelectorAll("#btnGuardarDependencia");

for (var i = 0; i < linkDelete4.length; i++) {
    linkDelete4[i].addEventListener('click', guardar_dependencia_msj);
}