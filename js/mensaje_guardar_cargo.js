function guardar_cargo_msj(e) {

    if (confirm("¿Estás seguro que deseas guardar el cargo?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete8 = document.querySelectorAll("#btnGuardarCargo");

for (var i = 0; i < linkDelete8.length; i++) {
    linkDelete8[i].addEventListener('click', guardar_cargo_msj);
}