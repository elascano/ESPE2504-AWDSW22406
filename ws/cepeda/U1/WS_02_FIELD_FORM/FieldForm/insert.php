<?php
include("index.php");

$model = $_POST['txtModel'];
$fabrication_year = $_POST['txtYear'];
$vehicle_type = $_POST['txtType'];
$is_electric = $_POST['txtRadio'];

// Manejo del archivo
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$filename = basename($_FILES["txtPhoto"]["name"]);
$targetFile = $uploadDir . $filename;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

$allowed = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowed)) {
    die("Solo se permiten archivos JPG, PNG o GIF.");
}

if (!move_uploaded_file($_FILES["txtPhoto"]["tmp_name"], $targetFile)) {
    die("Error al subir la imagen.");
}

// Insertar en base de datos
$sql = "INSERT INTO vehicles (model, fabrication_year, vehicle_type, is_electric, image_path) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "sssss", $model, $fabrication_year, $vehicle_type, $is_electric, $targetFile);

if (mysqli_stmt_execute($stmt)) {
    echo "✅ Vehículo registrado correctamente.";
    echo "<br><a href='index.php'>Volver</a>";
} else {
    echo "❌ Error al registrar el vehículo: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
