const SUPABASE_URL = 'https://TU_PROYECTO.supabase.co';
const SUPABASE_KEY = 'TU_API_KEY';

const headers = {
  apikey: SUPABASE_KEY,
  Authorization: `Bearer ${SUPABASE_KEY}`,
  'Content-Type': 'application/json',
  Prefer: 'return=representation'
};

// CREAR banco
async function crearBanco(data) {
  const res = await fetch(`${SUPABASE_URL}/rest/v1/bancos`, {
    method: 'POST',
    headers,
    body: JSON.stringify(data)
  });
  return res.json();
}

// LEER todos los bancos
async function obtenerBancos() {
  const res = await fetch(`${SUPABASE_URL}/rest/v1/bancos?select=*`, {
    method: 'GET',
    headers
  });
  return res.json();
}

// ACTUALIZAR banco por ID
async function actualizarBanco(id, data) {
  const res = await fetch(`${SUPABASE_URL}/rest/v1/bancos?id=eq.${id}`, {
    method: 'PATCH',
    headers,
    body: JSON.stringify(data)
  });
  return res.json();
}

// ELIMINAR banco por ID
async function eliminarBanco(id) {
  const res = await fetch(`${SUPABASE_URL}/rest/v1/bancos?id=eq.${id}`, {
    method: 'DELETE',
    headers
  });
  return res.ok;
}

// Manejo del formulario
document.getElementById("formBanco").addEventListener("submit", async function(e) {
  e.preventDefault();

  const formData = new FormData(this);
  const data = {
    nombre: formData.get("nombre"),
    pais: formData.get("pais"),
    clientes: Number(formData.get("clientes")),
    fondos: parseFloat(formData.get("fondos")),
    interes: parseFloat(formData.get("interes"))
  };

  const resultado = await crearBanco(data);
  document.getElementById("respuesta").innerText = resultado?.id
    ? "Banco guardado correctamente."
    : "Error al guardar.";
});
