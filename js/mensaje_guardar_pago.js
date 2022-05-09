function guardar_pago_msj(e) {

    if (confirm("¿Estás seguro que deseas guardar el pago?")) {
        return true;
    } else {

        e.preventDefault(); //se cancela el evento

    }

}

let linkDelete28 = document.querySelectorAll("#btnGuardarPago");

for (var i = 0; i < linkDelete28.length; i++) {
    linkDelete28[i].addEventListener('click', guardar_pago_msj);
}