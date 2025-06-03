function convertirTiempo() {
  const dur = parseInt(document.getElementById("durCalc").value);
  const minutos = Math.floor(dur / 60);
  const segundos = dur % 60;
  document.getElementById("resultados").innerText = `Duración: ${minutos} min ${segundos} seg`;
}

function calcularPromedio() {
  const valores = document.getElementById("duraciones").value.split(",").map(Number);
  const suma = valores.reduce((a, b) => a + b, 0);
  const promedio = (suma / valores.length).toFixed(2);
  document.getElementById("resultados").innerText = `Promedio de duración: ${promedio} segundos`;
}

function contarGeneros() {
  const generos = document.getElementById("generos").value.split(",");
  const conteo = {};
  generos.forEach(g => conteo[g] = (conteo[g] || 0) + 1);
  let texto = "Cantidad por género:\n";
  for (let g in conteo) {
    texto += `${g}: ${conteo[g]}\n`;
  }
  document.getElementById("resultados").innerText = texto;
}