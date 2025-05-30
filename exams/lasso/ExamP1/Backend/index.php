<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "bzhdzpjqttsvyimwfqfd-mysql.services.clever-cloud.com";
$username = "udwcs3yfmktugbzu";
$password = "4cGHXjHKY0gfcdFlcPdS";
$database = "bzhdzpjqttsvyimwfqfd";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $database, $port);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(['error' => 'Connection failed: ' . $conn->connect_error]);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $sql = "SELECT * FROM Building WHERE id = $id";
    } else {
        $sql = "SELECT * FROM Building";
    }

    $result = $conn->query($sql);
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);

    if (!$input) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid input']);
        exit();
    }

    $name = $conn->real_escape_string($input['name']);
    $cost = floatval($input['cost']);
    $meters = intval($input['meters']);
    $owner = $conn->real_escape_string($input['owner']);
    $address = $conn->real_escape_string($input['address']);

    $sql = "INSERT INTO Building (name, cost, meters, owner, address) VALUES ('$name', $cost, $meters, '$owner', '$address')";
    if ($conn->query($sql)) {
        echo json_encode(['success' => true, 'id' => $conn->insert_id]);
    } else {
        http_response_code(500);
        echo json_encode(['error' => $conn->error]);
    }
}

$conn->close();
?>
