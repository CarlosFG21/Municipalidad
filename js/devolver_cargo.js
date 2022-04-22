function devolver_cargo(e) {

    if (confirm("¿Estás seguro que deseas reactivar el cargo?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete10 = document.querySelectorAll("#btnReactivarCargo");

for (var i = 0; i < linkDelete10.length; i++) {
    linkDelete10[i].addEventListener('click', devolver_cargo);
}