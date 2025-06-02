document.getElementById('placaForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  const placa = document.getElementById('placa').value;
  
  // Expresión regular para validar el formato de la placa
  const regex = /^[A-Z]{3}-\d{3,4}$/;

  const errorMessage = document.getElementById('error-message');
  const successMessage = document.getElementById('success-message');
  const resultMessage = document.getElementById('result');

  // Ocultar los mensajes antes de mostrar el nuevo
  errorMessage.style.display = 'none';
  successMessage.style.display = 'none';
  resultMessage.style.display = 'none';

  // Validar la placa
  if (regex.test(placa)) {
    successMessage.style.display = 'block';
    resultMessage.style.display = 'block';
    resultMessage.innerHTML = `Placa: <strong>${placa}</strong> es <span style="color: green;">válida</span>`;
  } else {
    errorMessage.style.display = 'block';
    errorMessage.textContent = 'Placa inválida. Debe seguir el formato XXX-123 o XXX-1234.';
  }
});
