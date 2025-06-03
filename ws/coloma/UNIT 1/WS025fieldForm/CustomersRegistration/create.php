<?php
$mysqli = new mysqli("localhost", "root", "", "customerdb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$id = $_POST['customerID'];
$name = $_POST['customerName'];
$born = $_POST['bornDate'];
$email = $_POST['customerEmail'];
$phone = $_POST['customerPhone'];
$gender = $_POST['customerGender'];

$stmt = $mysqli->prepare("INSERT INTO customers (Id, name, born_date, email, phone, gender) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $id, $name, $born, $email, $phone, $gender);

if ($stmt->execute()) {
    echo "Customer registered successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
