<?php
include 'conexion.php'; 
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Captura de datos del formulario
$firstName = $_POST['firstName'] ?? '';
$lastName  = $_POST['lastName'] ?? '';
$email     = $_POST['email'] ?? '';
$age       = $_POST['age'] ?? '';
$gender    = $_POST['gender'] ?? '';

// Mostrar los datos recibidos
echo "<h3>Datos recibidos:</h3>";
echo "First Name: $firstName<br>";
echo "Last Name: $lastName<br>";
echo "Email: $email<br>";
echo "Age: $age<br>";
echo "Gender: $gender<br><br>";

// Verificar que todos los campos estén completos
if ($firstName && $lastName && $email && $age && $gender) {
    // Preparar la consulta SQL
    $stmt = $conn->prepare("INSERT INTO students (first_name, last_name, email, age, gender) VALUES (?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("❌ Error en prepare: " . $conn->error);
    }

    // Enlazar los parámetros (s = string, i = integer)
    if (!$stmt->bind_param("sssds", $firstName, $lastName, $email, $age, $gender)) {
        die("❌ Error en bind_param: " . $stmt->error);
    }

    // Ejecutar la consulta
    if (!$stmt->execute()) {
        die("❌ Error en execute: " . $stmt->error);
    }

    echo "✅ Success: The student was saved.";
    $stmt->close();
} else {
    echo "⚠️ Some fields are missing.";
}

$conn->close();
echo "<br><br><a href='index.html'>Volver al formulario</a>";
?>

