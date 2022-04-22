function cargo_eliminar_msj(e) {

    if (confirm("¿Estás seguro que deseas eliminar el cargo?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete9 = document.querySelectorAll("#btnEliminarCargo");

for (var i = 0; i < linkDelete9.length; i++) {
    linkDelete9[i].addEventListener('click', cargo_eliminar_msj);
}