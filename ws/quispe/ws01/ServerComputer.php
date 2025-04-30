<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "computer_register"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$storage = $_POST['storage'];
$cpu = $_POST['CPU'];
$gpu = $_POST['GPU'];
$ram = $_POST['ram'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$category = $_POST['category'];
$peripherals = isset($_POST['peripherals']) ? $_POST['peripherals'] : 'No';
$peripherals_description = ($peripherals == 'Yes') ? $_POST['peripherals_description'] : 'No'; // Default to 'No' if not provided
$os = $_POST['os'];


$sql = "INSERT INTO computers (storage, cpu, gpu, ram, price, amount, category, peripherals, peripherals_description, os)
        VALUES ('$storage', '$cpu', '$gpu', '$ram', '$price', '$amount', '$category', '$peripherals', '$peripherals_description', '$os')";

if ($conn->query($sql) === TRUE) {
    echo "New computer record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
