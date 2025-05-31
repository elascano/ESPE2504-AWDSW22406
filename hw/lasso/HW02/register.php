<?php
// Database connection settings
$host = "localhost";
$dbname = "gamezone";
$user = "root";
$pass = "";

// Connect to MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$game = $_POST['game'];
$age = intval($_POST['age']);

// Insert into database
$sql = "INSERT INTO users (username, email, password, favorite_game, age)
        VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $username, $email, $password, $game, $age);

if ($stmt->execute()) {
  echo "✅ Registration successful!";
} else {
  echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
