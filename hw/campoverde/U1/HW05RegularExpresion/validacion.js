function validarFecha() {
    const fechaInput = document.getElementById("fecha").value;
    const mensaje = document.getElementById("mensaje");

    // Expresión regular para formato dd/mm/yyyy
    const regex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;

    if (regex.test(fechaInput)) {
        mensaje.textContent = "✅ Fecha válida.";
        mensaje.className = "valido";
    } else {
        mensaje.textContent = "❌ Formato inválido.";
        mensaje.className = "invalido";
    }
}
