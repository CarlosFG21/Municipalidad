function editar_cargo_msj(e) {

    if (confirm("¿Estás seguro que deseas editar el cargo?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete11 = document.querySelectorAll("#btnEditarCargo");

for (var i = 0; i < linkDelete11.length; i++) {
    linkDelete11[i].addEventListener('click', editar_cargo_msj);
}