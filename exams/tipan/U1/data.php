<?php

$servername = "sql211.infinityfree.com";
$username = "if0_39084214";
$password = "trabatrix2";
$dbname = "if0_39084214_trucks";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $mma = $_POST['mma'];
    $tara = $_POST['tara'];

    $stmt = $conn->prepare("INSERT INTO trucks (brand, model, year, color, mma, tara) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissi", $brand, $model, $year, $color, $mma, $tara);

    if ($stmt->execute()) {
        $last_id = $stmt->insert_id;

        $result = $conn->query("SELECT carga_util FROM trucks WHERE id = $last_id");

        if ($result && $row = $result->fetch_assoc()) {
            echo "Truck registered successfully.<br>";
            echo "Carga útil: " . $row['carga_util'] . " kg";
        } else {
            echo "Truck registered, but failed to retrieve carga útil.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
