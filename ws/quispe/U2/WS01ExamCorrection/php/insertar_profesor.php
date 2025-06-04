<?php
include("conexion.php");

function limpiar($str) {
    return htmlspecialchars(trim($str));
}

$nombre = limpiar($_POST["nombre"] ?? '');
$apellido = limpiar($_POST["apellido"] ?? '');
$departamento = limpiar($_POST["departamento"] ?? '');
$años = intval($_POST["años_experiencia"] ?? 0);
$salario = floatval($_POST["salario_base"] ?? 0);
$publicaciones = intval($_POST["nro_publicaciones"] ?? 0);

if (empty($nombre) || empty($apellido) || empty($departamento)) {
    die("Error: Todos los campos de texto son obligatorios.");
}
if ($años < 0 || $salario < 0 || $publicaciones < 0) {
    die("Error: Los valores numéricos no pueden ser negativos.");
}

$sql = "INSERT INTO profesores (nombre, apellido, departamento, años_experiencia, salario_base, nro_publicaciones)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}

$stmt->bind_param("sssidi", $nombre, $apellido, $departamento, $años, $salario, $publicaciones);

if ($stmt->execute()) {
    echo "Profesor insertado correctamente.";
} else {
    echo "Error al insertar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
