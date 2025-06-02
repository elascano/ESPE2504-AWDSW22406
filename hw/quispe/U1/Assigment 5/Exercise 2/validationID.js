window.onload = function () {
  const form = document.querySelector('form');

  form.onsubmit = function (e) {
    e.preventDefault(); // Detener envío del formulario

    const id = document.getElementById('id').value.trim();
    const resultDiv = document.getElementById('showResult');

    // Expresión regular para cédula válida (01-17 + 8 dígitos)
    const cedulaRegex = /^(0[1-9]|1[0-7])[0-9]{8}$/;

    if (cedulaRegex.test(id)) {
      resultDiv.innerHTML =
        "<p style='color:green;'>Cédula válida en formato.</p>";
    } else {
      resultDiv.innerHTML =
        "<p style='color:red;'>Cédula inválida. Debe tener 10 dígitos, empezar entre 01 y 17, y contener solo números.</p>";
    }
  };
};
