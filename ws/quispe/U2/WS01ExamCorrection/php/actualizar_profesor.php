<?php
include("conexion.php");

$id = intval($_POST["id"]);
$campo = $_POST["campo"];
$valor = trim($_POST["valor"]);

$permitidos = ["nombre", "apellido", "departamento", "años_experiencia", "salario_base", "nro_publicaciones"];
if (!in_array($campo, $permitidos)) {
    die("Campo no permitido.");
}

// Validaciones por tipo
if (in_array($campo, ["años_experiencia", "nro_publicaciones"]) && (!is_numeric($valor) || intval($valor) < 0)) {
    die("Valor numérico inválido.");
}
if ($campo === "salario_base" && (!is_numeric($valor) || floatval($valor) < 0)) {
    die("Salario inválido.");
}
if (in_array($campo, ["nombre", "apellido", "departamento"])) {
    $valor = htmlspecialchars($valor);
}

$sql = "UPDATE profesores SET $campo = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $valor, $id);
$stmt->execute();

echo $stmt->affected_rows > 0 ? "Actualización exitosa" : "Sin cambios";

$conn->close();
?>
