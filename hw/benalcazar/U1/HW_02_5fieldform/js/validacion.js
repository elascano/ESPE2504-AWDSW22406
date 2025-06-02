function validarFormulario() {
    let campos = ["nombre_pelicula", "hora_pelicula", "precio_total", "correo_usuario", "dia_entrada", "asiento", "nombre_cine", "id_usuario"];
    
    for (let campo of campos) {
        let valor = document.getElementById(campo).value.trim();
        if (valor === "") {
            alert("Por favor, complete todos los campos.");
            return false;
        }
    }
    return true;
}
