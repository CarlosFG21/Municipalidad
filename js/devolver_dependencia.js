function dependencia_devolver_msj(e) {

    if (confirm("¿Estás seguro que deseas reactivar la dependencia?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete7 = document.querySelectorAll("#btnReactivarDependencia");

for (var i = 0; i < linkDelete7.length; i++) {
    linkDelete7[i].addEventListener('click', dependencia_devolver_msj);
}