document.getElementById('placaForm').addEventListener('submit', function(event) {
  event.preventDefault();

  // Obtener los valores del formulario
  const puertosFrontales = parseInt(document.getElementById('puertosFrontales').value);
  const puertosTraseros = parseInt(document.getElementById('puertosTraseros').value);
  const puertosOtros = parseInt(document.getElementById('puertosOtros').value);
  const chipset = document.getElementById('chipset').value;

  // Calcular el total de puertos USB
  const totalPuertosUSB = puertosFrontales + puertosTraseros + puertosOtros;

  // Mostrar los resultados
  const detalleDatos = `
    <div class="result-item"><strong>Chipset:</strong> ${chipset.charAt(0).toUpperCase() + chipset.slice(1)}</div>
    <div class="result-item"><strong>Puertos Frontales USB:</strong> ${puertosFrontales}</div>
    <div class="result-item"><strong>Puertos Traseros USB:</strong> ${puertosTraseros}</div>
    <div class="result-item"><strong>Otros Puertos USB:</strong> ${puertosOtros}</div>
  `;

  const totalPuertos = `
    <div class="result-item"><strong>Total de Puertos USB:</strong> ${totalPuertosUSB}</div>
  `;

  // Mostrar los detalles y el cálculo
  document.getElementById('detalleDatos').innerHTML = detalleDatos;
  document.getElementById('totalPuertosUSB').innerHTML = totalPuertos;

  document.getElementById('resultados').style.display = 'block';
});