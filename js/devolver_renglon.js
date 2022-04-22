function renglon_devolver_msj(e) {

    if (confirm("¿Estás seguro que deseas reactivar el renglon?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete15 = document.querySelectorAll("#btnReactivarRenglon");

for (var i = 0; i < linkDelete15.length; i++) {
    linkDelete15[i].addEventListener('click', renglon_devolver_msj);
}