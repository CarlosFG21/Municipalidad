function editar_pago_msj(e) {

    if (confirm("¿Estás seguro que deseas editar el pago?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete29 = document.querySelectorAll("#btnEditarPago");

for (var i = 0; i < linkDelete29.length; i++) {
    linkDelete29[i].addEventListener('click', editar_pago_msj);
}