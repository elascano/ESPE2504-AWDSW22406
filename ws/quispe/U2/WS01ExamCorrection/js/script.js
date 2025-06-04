function cargarTabla() {
    fetch('php/leer_profesores.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('tabla-profesores').innerHTML = data;
        });
}

function guardarCambios(id) {
    const celdas = document.querySelectorAll(`[data-id='${id}']`);
    celdas.forEach(celda => {
        const campo = celda.getAttribute('data-campo');
        const valor = celda.textContent;

        fetch('php/actualizar_profesor.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `id=${id}&campo=${campo}&valor=${encodeURIComponent(valor)}`
        });
    });

    alert("Datos actualizados");
    cargarTabla();
}

// Validación del formulario de inserción
document.getElementById("form-insertar").addEventListener("submit", function(event) {
    const nombre = this.nombre.value.trim();
    const apellido = this.apellido.value.trim();
    const departamento = this.departamento.value.trim();
    const años = parseInt(this.años_experiencia.value);
    const salario = parseFloat(this.salario_base.value);
    const publicaciones = parseInt(this.nro_publicaciones.value);

    if (!nombre || !apellido || !departamento) {
        alert("Todos los campos de texto deben estar completos.");
        event.preventDefault();
        return;
    }

    if (isNaN(años) || años < 0 || isNaN(salario) || salario < 0 || isNaN(publicaciones) || publicaciones < 0) {
        alert("Los campos numéricos deben ser válidos y no negativos.");
        event.preventDefault();
        return;
    }
});

// Cargar la tabla al iniciar la página
window.onload = cargarTabla;
