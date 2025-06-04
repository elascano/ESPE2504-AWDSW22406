<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $licensePlate = $_POST['txtId'];
    $driverName = $_POST['txtName'];
    $driverId = $_POST['txtPassword'];
    $vehicleYear = $_POST['txtVehicleYear'];
    $cooperative = $_POST['Coperativa'];
    $startRoute = $_POST['txtStartRoute'];

    $stmt = $conn->prepare("INSERT INTO bus_registration (license_plate, driver_name, driver_id, vehicle_year, cooperative, start_route) VALUES (?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssiss", $licensePlate, $driverName, $driverId, $vehicleYear, $cooperative, $startRoute);

    if ($stmt->execute()) {
        echo "Registración exitosa chavalin!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
