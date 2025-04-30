<?php
include 'conexion.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);

$serial_number = $_POST['serial_number'] ?? '';
$operative_system = $_POST['operative_system'] ?? '';
$price = $_POST['price'] ?? '';
$model = $_POST['model'] ?? '';
$starting_date = $_POST['starting_date'] ?? '';
$brand = $_POST['brand'] ?? '';
$storage_space = $_POST['storage_space'] ?? '';
$ram_memory = $_POST['ram_memory'] ?? '';
$microprocessor = $_POST['microprocessor'] ?? '';
$graphic_card = $_POST['graphic_card'] ?? '';

echo "<h3>Datos recibidos:</h3>";
echo "Serial: $serial_number<br>";
echo "OS: $operative_system<br>";
echo "Price: $price<br>";
echo "Model: $model<br>";
echo "Date: $starting_date<br>";
echo "Brand: $brand<br>";
echo "Storage: $storage_space<br>";
echo "RAM: $ram_memory<br>";
echo "CPU: $microprocessor<br>";
echo "GPU: $graphic_card<br><br>";

if ($serial_number && $operative_system && $price && $model && $starting_date && $brand && $storage_space && $ram_memory && $microprocessor && $graphic_card) {
    $stmt = $conn->prepare("INSERT INTO computers (serial_number, operative_system, price, model, starting_date, brand, storage_space, ram_memory, microprocessor, graphic_card) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if (!$stmt) {
        die(" Error en prepare: " . $conn->error);
    }

    if (!$stmt->bind_param("isdssssiss", $serial_number, $operative_system, $price, $model, $starting_date, $brand, $storage_space, $ram_memory, $microprocessor, $graphic_card)) {
        die(" Error en bind_param: " . $stmt->error);
    }

    if (!$stmt->execute()) {
        die(" Error en execute: " . $stmt->error);
    }

    echo "Success: Computer saved.";
    $stmt->close();
} else {
    echo "Missing fields.";
}

$conn->close();
echo "<br><br><a href='index.html'>Back to form</a>";
?>

