function dependencia_eliminar_msj(e) {

    if (confirm("¿Estás seguro que deseas eliminar la dependencia?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete6 = document.querySelectorAll("#btnEliminarDependencia");

for (var i = 0; i < linkDelete6.length; i++) {
    linkDelete6[i].addEventListener('click', dependencia_eliminar_msj);
}