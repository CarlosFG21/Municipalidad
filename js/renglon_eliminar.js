function renglon_eliminar_msj(e) {

    if (confirm("¿Estás seguro que deseas eliminar renglon?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete14 = document.querySelectorAll("#btnEliminarRenglon");

for (var i = 0; i < linkDelete14.length; i++) {
    linkDelete14[i].addEventListener('click', renglon_eliminar_msj);
}