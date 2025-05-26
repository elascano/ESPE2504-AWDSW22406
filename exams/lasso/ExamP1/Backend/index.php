<?php
header('Content-Type: application/json');

$servername = "bzhdzpjqttsvyimwfqfd-mysql.services.clever-cloud.com";
$username = "udwcs3yfmktugbzu";
$password = "4cGHXjHKY0gfcdFlcPdS";
$database = "bzhdzpjqttsvyimwfqfd";
$port = getenv('MYSQL_ADDON_PORT') ?: 3306;

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(['error' => 'Connection failed: ' . $conn->connect_error]);
    exit();
}

$sql = "SELECT * FROM Building";
$result = $conn->query($sql);

$data =
