<?php
include 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $id_pelicula = $_POST['id_pelicula'];
    $hora_pelicula = $_POST['hora_pelicula'];
    $precio_total = $_POST['precio_total'];
    $correo_usuario = $_POST['correo_usuario'];
    $dia_entrada = $_POST['dia_entrada'];
    $asiento = $_POST['asiento'];
    $nombre_cine = $_POST['nombre_cine'];

    if (empty($id_pelicula) || empty($hora_pelicula) || empty($precio_total) || empty($correo_usuario) || empty($dia_entrada) || empty($asiento) || empty($nombre_cine)) {
        echo "<script>alert('Todos los campos son obligatorios'); window.history.back();</script>";
        exit;
    }

    // Insertar en la tabla `voleto`
    $sql = "INSERT INTO voleto (id_usuario, nombre_pelicula, hora_pelicula, precio_total, correo_usuario, dia_entrada, asiento, nombre_cine) 
            VALUES (NULL, '', ?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sdsiss", $hora_pelicula, $precio_total, $correo_usuario, $dia_entrada, $asiento, $nombre_cine);

    if ($stmt->execute()) {
        echo "<script>alert('Registro exitoso'); window.location.href='formulario.html';</script>";
    } else {
        echo "<script>alert('Error al registrar: " . $stmt->error . "'); window.history.back();</script>";
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "<script>alert('Acceso denegado'); window.location.href='formulario.html';</script>";
}
?>
