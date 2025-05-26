<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "keyboards_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $keyboard = htmlspecialchars(trim($_POST['keyboard'] ?? ''));
    $computeNumber1 = floatval($_POST['ComputeNumber1'] ?? 0); // número de teclas
    $computeNumber2 = floatval($_POST['ComputeNumber2'] ?? 0); // precio color keycap
    $computeNumber3 = floatval($_POST['ComputeNumber3'] ?? 0); // precio teclado
    $discount = floatval($_POST['discount'] ?? 0);

    $subtotal = ($computeNumber1 * $computeNumber2) + $computeNumber3;
    $discountAmount = $subtotal * ($discount / 100);
    $totalPrice = $subtotal - $discountAmount;


    $sql = "INSERT INTO registers (name, email, keyboard, number_of_keys, keycap_price, keyboard_price, discount, subtotal, discount_amount, total_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ssssdddddd", $name, $email, $keyboard, $computeNumber1, $computeNumber2, $computeNumber3, $discount, $subtotal, $discountAmount, $totalPrice);
        if ($stmt->execute()) {
            echo "<h2>Registro exitoso</h2><a href='../index.html'>Volver</a>";
        } else {
            echo "Error al guardar: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}
$conn->close();
?>

