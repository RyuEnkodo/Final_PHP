let Check = document.getElementById('Check'); 
let Envio = document.getElementById('Envio');

Check.onclick = function () {
    if (Check.checked) {
        Envio.disabled = false;

    } else {
        Envio.disabled = true;
    }

}

function validar_info() {

    if (document.forma.Nombre.value.length == 0 || document.forma.Apellido.value.length == 0 ||
        document.forma.Email.value.length == 0 || document.forma.Mensaje.value.length == 0) {
        alert("Verifique los campos vacios");
        return 0;
    }
}















