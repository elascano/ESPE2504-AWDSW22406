<?php
include 'connection.php';

$flightNumber = $_POST['flightNumber'] ?? '';
$airline = $_POST['airline'] ?? '';
$status = $_POST['status'] ?? '';
$origin = $_POST['origin'] ?? '';
$departureDate = $_POST['departureDate'] ?? '';
$departureTime = $_POST['departureTime'] ?? '';
$destination = $_POST['destination'] ?? '';
$arrivalDate = $_POST['arrivalDate'] ?? '';
$arrivalTime = $_POST['arrivalTime'] ?? '';
$aircraftReg = $_POST['aircraftReg'] ?? '';
$aircraftModel = $_POST['aircraftModel'] ?? '';
$aircraftMaker = $_POST['aircraftMaker'] ?? '';
$pilotName = $_POST['pilotName'] ?? '';
$pilotLicense = $_POST['pilotLicense'] ?? '';
$amenities = isset($_POST['amenities']) ? implode(',', $_POST['amenities']) : '';

$sql = "INSERT INTO flights (
    flight_number, airline, status, origin_city, destination_city,
    departure_date, departure_time, arrival_date, arrival_time,
    aircraft_registration, aircraft_model, aircraft_manufacturer,
    pilot_name, pilot_license, amenities
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "sssssssssssssss",
    $flightNumber, $airline, $status, $origin, $destination,
    $departureDate, $departureTime, $arrivalDate, $arrivalTime,
    $aircraftReg, $aircraftModel, $aircraftMaker,
    $pilotName, $pilotLicense, $amenities
);

if ($stmt->execute()) {
    echo "<script>alert('Flight registered successfully!'); window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Error registering flight');window.location.href = 'index.html'; </script>";
}

$stmt->close();
$conn->close();
?>
